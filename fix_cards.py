import os
import glob
import re

files = glob.glob('*.php')
count = 0

for f in files:
    with open(f, 'r') as file:
        content = file.read()
    
    # We only want to modify the grid inside "Conditions Treated" / "Target Areas"
    # It has `<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-[minmax(180px,auto)] gs-stagger-bento">`
    # We will search up to `</section>`
    match = re.search(r'(<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 auto-rows-\[minmax\(180px,auto\)\] gs-stagger-bento">)(.*?)(</div>\s*</div>\s*</section>)', content, re.DOTALL)
    
    if match:
        prefix = match.group(1)
        grid_content = match.group(2)
        suffix = match.group(3)
        
        # Check if already modified to prevent double application
        if 'fa-arrow-right' in grid_content:
            continue
            
        # 1. Add cursor-pointer to cards
        grid_content = grid_content.replace('bento-item relative"', 'bento-item relative cursor-pointer"')
        grid_content = grid_content.replace('bento-item overflow-hidden relative"', 'bento-item overflow-hidden relative cursor-pointer"')
        
        # 2. Make fonts consistent
        # h4: force all to text-xl mb-4 relative z-10 pr-12
        grid_content = re.sub(r'<h4 class="font-heading font-semibold text-brand-deeper text-2xl mb-4 relative z-10">', r'<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-4 relative z-10 pr-12">', grid_content)
        grid_content = re.sub(r'<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3">', r'<h4 class="font-heading font-semibold text-brand-deeper text-xl mb-4 relative z-10 pr-12">', grid_content)
        
        # p: force all text-sm to text-base, and add relative z-10 if not present
        grid_content = re.sub(r'<p class="text-sm text-brand-muted', r'<p class="text-base text-brand-muted', grid_content)
        
        # Add relative z-10 to p tags
        def add_z10(m):
            cls = m.group(1)
            if 'relative z-10' not in cls:
                cls += ' relative z-10'
            return f'<p class="{cls}"'
            
        grid_content = re.sub(r'<p class="([^"]+)"', add_z10, grid_content)
        
        # 3. Add pointers (arrow icon top right)
        arrow_html = r'''
                    <div class="absolute top-8 right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
                        <i class="fas fa-arrow-right -rotate-45"></i>
                    </div>'''
        
        # Insert arrow after the </p> before the closing </div> of the card
        grid_content = re.sub(r'(</p>\s*)</div>', r'\1' + arrow_html + '\n                </div>', grid_content)
        
        new_content = content[:match.start()] + prefix + grid_content + suffix + content[match.end():]
        
        with open(f, 'w') as file:
            file.write(new_content)
            
        count += 1

print(f"Total files updated with pointers and consistent fonts: {count}")
