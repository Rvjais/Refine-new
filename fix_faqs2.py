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
        
        # Replacements for FAQ items
        new_faq = faq_section.replace('rounded-3xl', 'rounded-2xl')
        new_faq = new_faq.replace('class="p-8 flex', 'class="p-5 lg:p-6 flex')
        new_faq = new_faq.replace('text-xl pr-8', 'text-lg pr-6')
        new_faq = new_faq.replace('w-12 h-12', 'w-10 h-10')
        new_faq = new_faq.replace('class="px-8 pb-8"', 'class="px-5 lg:px-6 pb-5 lg:pb-6"')
        new_faq = new_faq.replace('text-base leading-relaxed mt-2', 'text-sm leading-relaxed mt-0')
        new_faq = new_faq.replace('pt-6">', 'pt-4">')
        new_faq = new_faq.replace('space-y-5', 'space-y-3')
        
        # Replace only if there are changes
        if faq_section != new_faq:
            new_content = content.replace(faq_section, new_faq)
            with open(f, 'w') as file:
                file.write(new_content)
            count += 1

print(f"Total files updated for FAQ sizing: {count}")
