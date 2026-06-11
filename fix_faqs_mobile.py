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
        
        # Replacements to slim down the FAQ on mobile
        new_faq = faq_section.replace('rounded-2xl', 'rounded-xl md:rounded-2xl')
        new_faq = new_faq.replace('class="p-5 lg:p-6 flex', 'class="p-4 md:p-5 lg:p-6 flex')
        new_faq = new_faq.replace('text-lg pr-6', 'text-base md:text-lg pr-4 md:pr-6')
        new_faq = new_faq.replace('w-10 h-10', 'w-8 h-8 md:w-10 md:h-10')
        new_faq = new_faq.replace('class="px-5 lg:px-6 pb-5 lg:pb-6"', 'class="px-4 md:px-5 lg:px-6 pb-4 md:pb-5 lg:pb-6"')
        
        # Remove any double spaces
        new_faq = new_faq.replace('  ', ' ')
        
        # Replace only if there are changes
        if faq_section != new_faq:
            new_content = content.replace(faq_section, new_faq)
            with open(f, 'w') as file:
                file.write(new_content)
            count += 1

print(f"Total files updated for mobile FAQ sizing: {count}")
