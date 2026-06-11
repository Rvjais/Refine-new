import os
import glob
import re

files = glob.glob('*.php')
count = 0

for f in files:
    with open(f, 'r') as file:
        content = file.read()
    
    # Isolate FAQ Block
    match = re.search(r'(<!-- FAQ Block -->.*?</section>)', content, re.DOTALL)
    
    if match:
        faq_section = match.group(0)
        
        # We need to replace the padding classes to be even smaller vertically on mobile
        # Current: class="p-4 md:p-5 lg:p-6 flex justify-between items-center transition-colors"
        new_faq = faq_section.replace('class="p-4 md:p-5 lg:p-6 flex', 'class="px-4 py-3 md:px-5 md:py-4 lg:p-6 flex')
        
        # Current content padding: class="px-4 md:px-5 lg:px-6 pb-4 md:pb-5 lg:pb-6"
        new_faq = new_faq.replace('class="px-4 md:px-5 lg:px-6 pb-4 md:pb-5 lg:pb-6"', 'class="px-4 pb-3 md:px-5 md:pb-4 lg:px-6 lg:pb-6"')
        
        # Replace only if there are changes
        if faq_section != new_faq:
            new_content = content.replace(faq_section, new_faq)
            with open(f, 'w') as file:
                file.write(new_content)
            count += 1

print(f"Total files updated for even smaller FAQ padding: {count}")
