#!/usr/bin/env python3
"""
Remove the '<!-- Floating Glass Badge -->' block and the small secondary/tertiary 
overlapping images from all PHP service pages and includes.

Targets:
1. Service pages (*.php at root): removes the <!-- Floating Glass Badge --> div block
2. includes/empathy.php: removes secondary image div + floating stat card
3. includes/home-extras.php: removes secondary image divs + floating stat cards
"""

import re
import os
import glob

def remove_floating_badge(content):
    """
    Remove the <!-- Floating Glass Badge --> comment + the full div block 
    that follows it, inside the gs-reveal-img-group container.
    Pattern:
        
        <!-- Floating Glass Badge -->
        <div class="absolute bottom-8 ...">
            ...multi-line inner badges...
        </div>
    """
    # Match the badge comment + the wrapping div (with nested divs)
    pattern = r'\s*<!-- Floating Glass Badge -->\s*<div class="absolute bottom-8[^"]*"[^>]*>.*?</div>\s*</div>'
    # Use DOTALL to match across newlines
    new_content = re.sub(pattern, '\n                    </div>', content, flags=re.DOTALL)
    return new_content

def process_service_pages():
    root = '/home/veer/Ranveer/refine'
    php_files = glob.glob(os.path.join(root, '*.php'))
    
    changed = 0
    for filepath in sorted(php_files):
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
        
        if '<!-- Floating Glass Badge -->' not in content:
            continue
        
        new_content = remove_floating_badge(content)
        
        if new_content != content:
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f'  ✓ Cleaned: {os.path.basename(filepath)}')
            changed += 1
        else:
            print(f'  ⚠ No match found (pattern may differ): {os.path.basename(filepath)}')
    
    print(f'\nService pages processed: {changed} files updated')

def fix_empathy():
    """
    In empathy.php:
    - Remove the secondary image div (w-[80%] ... gs-delay-1)
    - Remove the glassmorphism floating stat div (top-12 left-4)
    - Make the main image wrapper take full width
    """
    filepath = '/home/veer/Ranveer/refine/includes/empathy.php'
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Remove the secondary image block
    secondary = r'\s*<!-- Secondary Image overlay -->\s*<div class="relative lg:absolute lg:bottom-0 lg:left-0.*?</div>\s*</div>'
    content = re.sub(secondary, '', content, flags=re.DOTALL)
    
    # Remove the floating stat card
    stat_card = r'\s*<!-- Glassmorphism Floating Stat -->\s*<div class="hidden lg:block absolute top-12 left-4.*?</div>\s*</div>'
    content = re.sub(stat_card, '', content, flags=re.DOTALL)
    
    # Update the main image wrapper to be full width (remove absolute positioning constraints)
    content = content.replace(
        'w-full lg:w-[85%] h-[350px] lg:h-[85%]',
        'w-full h-[350px] lg:h-[550px]'
    )
    # Also update the outer container - remove fixed height since no overlay needed
    content = content.replace(
        'relative h-auto lg:h-[700px] gs-reveal-img-group flex flex-col lg:block mt-8 lg:mt-0',
        'gs-reveal-img-group'
    )
    # Remove absolute positioning from main image wrapper
    content = content.replace(
        'relative lg:absolute lg:top-0 lg:right-0 w-full h-[350px] lg:h-[550px] img-reveal-wrapper shadow-2xl z-10 gs-reveal-img mb-6 lg:mb-0',
        'relative w-full h-[350px] lg:h-[550px] img-reveal-wrapper shadow-2xl gs-reveal-img'
    )
    
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
    print('  ✓ Fixed: includes/empathy.php')

def fix_home_extras():
    """
    In home-extras.php:
    - Section 3 (Why Refine): remove 2nd image div + '15+' floating card, simplify layout
    - Section 6 (IV Lounge): remove 2nd image div + '100% Absorption' floating card, simplify layout
    """
    filepath = '/home/veer/Ranveer/refine/includes/home-extras.php'
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # ---- Section 3: Why Refine ----
    # Remove the secondary image block (HydraFacial.webp)
    secondary_why = r'\s*<div class="relative lg:absolute lg:bottom-0 lg:right-0 w-\[80%\] lg:w-\[55%\] h-\[200px\] lg:h-\[60%\] img-reveal-wrapper shadow-2xl z-20 border-4 border-white gs-reveal-img gs-delay-1.*?</div>\s*</div>'
    content = re.sub(secondary_why, '', content, flags=re.DOTALL)
    
    # Remove the '15+' floating card
    card_15 = r'\s*<div class="hidden lg:block absolute top-8 right-4 z-30 glass-panel rounded-2xl p-4 max-w-\[180px\].*?</div>\s*</div>'
    content = re.sub(card_15, '', content, flags=re.DOTALL)
    
    # Update outer container for Why Refine section (remove fixed height)
    content = content.replace(
        'lg:col-span-6 relative h-auto lg:h-[640px] gs-reveal-img-group flex flex-col lg:block',
        'lg:col-span-6 gs-reveal-img-group'
    )
    # Update main image wrapper to full width
    content = content.replace(
        'relative lg:absolute lg:top-0 lg:left-0 w-full lg:w-[60%] h-[300px] lg:h-[70%] img-reveal-wrapper shadow-2xl z-10 gs-reveal-img mb-6 lg:mb-0',
        'relative w-full h-[400px] lg:h-[500px] img-reveal-wrapper shadow-2xl gs-reveal-img'
    )
    
    # ---- Section 6: IV Lounge ----
    # Remove the secondary image block (IV-Therapy_09.png)
    secondary_iv = r'\s*<div class="relative lg:absolute lg:bottom-0 lg:left-0 w-\[80%\] lg:w-\[45%\] h-\[200px\] lg:h-\[55%\] img-reveal-wrapper shadow-2xl rounded-3xl overflow-hidden z-20 border-4 border-white gs-reveal-img gs-delay-1.*?</div>\s*</div>'
    content = re.sub(secondary_iv, '', content, flags=re.DOTALL)
    
    # Remove the '100% Absorption' floating card
    card_absorption = r'\s*<div class="hidden lg:block absolute top-8 left-0 z-30 glass-panel rounded-2xl p-4 max-w-\[200px\].*?</div>\s*</div>'
    content = re.sub(card_absorption, '', content, flags=re.DOTALL)
    
    # Update outer container for IV Lounge section (remove fixed height)
    content = content.replace(
        'lg:col-span-7 order-1 lg:order-2 relative gs-reveal-img-group h-auto lg:h-[600px] flex flex-col lg:block mt-8 lg:mt-0',
        'lg:col-span-7 order-1 lg:order-2 gs-reveal-img-group mt-8 lg:mt-0'
    )
    # Update the main IV image wrapper to full width
    content = content.replace(
        'relative lg:absolute lg:top-0 lg:right-0 w-full lg:w-[80%] h-[300px] lg:h-[80%] img-reveal-wrapper shadow-2xl rounded-3xl overflow-hidden z-10 gs-reveal-img mb-6 lg:mb-0',
        'relative w-full h-[400px] lg:h-[520px] img-reveal-wrapper shadow-2xl rounded-3xl overflow-hidden gs-reveal-img'
    )
    
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
    print('  ✓ Fixed: includes/home-extras.php')

if __name__ == '__main__':
    print('=== Removing floating badges from service pages ===')
    process_service_pages()
    
    print('\n=== Fixing includes/empathy.php ===')
    fix_empathy()
    
    print('\n=== Fixing includes/home-extras.php ===')
    fix_home_extras()
    
    print('\n✅ All done!')
