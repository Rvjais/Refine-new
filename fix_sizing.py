import os
import glob
import re

files = glob.glob('*.php')
count = 0

for f in files:
    with open(f, 'r') as file:
        content = file.read()
    
    # We are targeting the "Conditions Treated" / "Target Areas" section
    # Let's use a regex to capture the entire section up to </section>
    match = re.search(r'(<!-- Conditions Treated -->\s*<section class="py-16 lg:py-24 bg-white relative">)(.*?)(</section>)', content, re.DOTALL)
    
    if match:
        prefix = match.group(1)
        section_content = match.group(2)
        suffix = match.group(3)
        
        # 1. Margin below section header
        # Original: <div class="mb-20 gs-reveal-text text-center max-w-3xl mx-auto">
        section_content = section_content.replace('mb-20', 'mb-12')
        
        # 2. Grid gap
        # Original: <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-[minmax(180px,auto)] gs-stagger-bento">
        section_content = section_content.replace('gap-6 auto-rows-[minmax(180px,auto)]', 'gap-4 md:gap-6 auto-rows-[minmax(140px,auto)]')
        
        # 3. Card padding and radius
        # Original: p-10 rounded-[2.5rem]
        section_content = section_content.replace('p-10 rounded-[2.5rem]', 'p-6 lg:p-8 rounded-3xl')
        
        # 4. Heading margin (inside cards)
        # We previously set: <h4 class="... text-xl mb-4 relative z-10 pr-12">
        # Let's change mb-4 to mb-2 for tighter spacing
        section_content = re.sub(r'(<h4 class="[^"]*?) mb-4 ([^"]*?">)', r'\1 mb-2 \2', section_content)
        
        # 5. Pointer arrow positioning
        # We previously set: <div class="absolute top-8 right-8 ...">
        # Let's adjust to: <div class="absolute top-6 right-6 lg:top-8 lg:right-8 ...">
        section_content = section_content.replace('absolute top-8 right-8', 'absolute top-6 right-6 lg:top-8 lg:right-8')
        
        new_content = content[:match.start()] + prefix + section_content + suffix + content[match.end():]
        
        with open(f, 'w') as file:
            file.write(new_content)
            
        count += 1

print(f"Total files updated for consistent sizing: {count}")
