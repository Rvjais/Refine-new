import os
import glob
import re

files = glob.glob('*.php')
count = 0

additional_text = " Our expert team utilizes advanced, evidence-based techniques to address this effectively. We personalize every step of the process to ensure optimal, long-lasting results that harmonize with your natural aesthetics and restore your confidence."

for f in files:
    with open(f, 'r') as file:
        content = file.read()
    
    # Target the Conditions Treated section
    match = re.search(r'(<!-- Conditions Treated -->\s*<section class="py-16 lg:py-24 bg-white relative">)(.*?)(</section>)', content, re.DOTALL)
    
    if match:
        prefix = match.group(1)
        section_content = match.group(2)
        suffix = match.group(3)
        
        # Find the first card's paragraph, specifically targeting the one in the first card
        # which usually follows <!-- 1: Large Span -->
        
        def modify_first_card(m):
            p_class_start = m.group(1)
            p_class_end = m.group(2)
            p_content = m.group(3)
            
            # Avoid duplicate appending
            if "Our expert team utilizes" not in p_content:
                p_content += additional_text
                
            return p_class_start + "max-w-3xl" + p_class_end + p_content + m.group(4)
            
        # First attempt: if it has max-w-md
        new_section_content = re.sub(r'(<!-- 1: Large Span -->.*?<p class="[^"]*)max-w-md([^"]*">)(.*?)(</p>)', modify_first_card, section_content, count=1, flags=re.DOTALL)
        
        # Second attempt: if it doesn't have max-w-md, just append to the first <p> found after <!-- 1: Large Span -->
        if new_section_content == section_content:
            def modify_first_card_no_md(m):
                p_class_start = m.group(1)
                p_content = m.group(2)
                
                if "Our expert team utilizes" not in p_content:
                    p_content += additional_text
                    
                return p_class_start + ' max-w-3xl">' + p_content + m.group(3)
                
            new_section_content = re.sub(r'(<!-- 1: Large Span -->.*?<p class="[^"]*)(">)(.*?)(</p>)', modify_first_card_no_md, section_content, count=1, flags=re.DOTALL)
            
        new_content = content[:match.start()] + prefix + new_section_content + suffix + content[match.end():]
        
        if content != new_content:
            with open(f, 'w') as file:
                file.write(new_content)
            count += 1

print(f"Total files updated with extra content in large card: {count}")
