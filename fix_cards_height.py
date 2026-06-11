import os
import glob
import re

files = glob.glob('*.php')
count = 0

for f in files:
    with open(f, 'r') as file:
        content = file.read()
    
    # Target the Conditions Treated section
    match = re.search(r'(<!-- Conditions Treated -->\s*<section class="py-16 lg:py-24 bg-white relative">)(.*?)(</section>)', content, re.DOTALL)
    
    if match:
        prefix = match.group(1)
        section_content = match.group(2)
        suffix = match.group(3)
        
        # 1. Remove the artificial min-height row constraint
        section_content = re.sub(r'auto-rows-\[minmax\([^\]]+\)\]\s*', '', section_content)
        
        # 2. Remove the "bento-item" class which forces 240px min-height and bottom alignment
        section_content = section_content.replace('bento-item ', '')
        
        # Ensure there are no double spaces left behind
        section_content = section_content.replace('  ', ' ')
        
        new_content = content[:match.start()] + prefix + section_content + suffix + content[match.end():]
        
        if content != new_content:
            with open(f, 'w') as file:
                file.write(new_content)
            count += 1

print(f"Total files updated to fix card heights: {count}")
