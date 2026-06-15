#!/usr/bin/env python3
"""
Extract accurate treatment content from scraped HTML pages 
and replace Rhinoplasty placeholder text in the current PHP pages.
"""
import re
import os
import shutil

BASE_DIR = os.path.dirname(os.path.abspath(__file__))
SCRAPED_DIR = os.path.join(BASE_DIR, 'scraped_site', 'pages')
PHP_DIR = BASE_DIR

def extract_scraped_content(html_file):
    """Extract the 'What is...' section content from scraped HTML."""
    with open(html_file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # Extract H1 page title
    h1_match = re.search(r'<h1 class="h1-sm">([^<]+)</h1>', content)
    page_title = h1_match.group(1) if h1_match else ''
    
    # Extract the main "about" section heading (h3)
    # We look for the FIRST about-section after page hero
    about_section = re.search(
        r'<section class="wide-60 about-section division mt-40"[^>]*>.*?<h3 class="h3-md">([^<]+)</h3>',
        content, re.DOTALL
    )
    about_heading = about_section.group(1) if about_section else ''
    
    # Extract the paragraph text
    about_para = ''
    if about_section:
        para_match = re.search(
            r'<h3 class="h3-md">[^<]+</h3>\s*<!-- Text -->\s*<p class="txt-color-05">([^<]+)',
            content, re.DOTALL
        )
        if para_match:
            about_para = para_match.group(1).strip()
    
    # If heading not found in mt-40 section, try without mt-40
    if not about_heading:
        about_section = re.search(
            r'<section class="wide-60 about-section division[^"]*"[^>]*>.*?<h3 class="h3-md">([^<]+)</h3>',
            content, re.DOTALL
        )
        if about_section:
            about_heading = about_section.group(1)
            
    # Extract FAQ section
    faq_section = ''
    faq_match = re.search(
        r'<section id="faqs-1"[^>]*>(.*?)</section>',
        content, re.DOTALL
    )
    if not faq_match:
        faq_match = re.search(
            r'<div class="faqs-section[^"]*"[^>]*>(.*?)<div class="faqs-section',
            content, re.DOTALL
        )
    
    # Extract "Why choose us" section
    why_choose = ''
    why_match = re.search(
        r'<h5 class="h5-lg">So, why choose us\?</h5>(.*?)(?=<h5 class="h5-lg">|</section>)',
        content, re.DOTALL
    )
    
    return {
        'page_title': page_title,
        'about_heading': about_heading,
        'about_para': about_para,
        'why_choose': why_match.group(0) if why_match else '',
        'faq': faq_match.group(0) if faq_match else '',
    }

def fix_php_file(php_file, scraped_html_file):
    """Replace Rhinoplasty placeholder text in PHP with correct content from scraped HTML."""
    scraped = extract_scraped_content(scraped_html_file)
    
    with open(php_file, 'r', encoding='utf-8') as f:
        php_content = f.read()
    
    # 1. Remove the "What is Liquid Rhinoplasty?" comment
    php_content = php_content.replace(
        '<!-- What is Liquid Rhinoplasty? -->',
        f'<!-- {scraped["about_heading"]} -->' if scraped['about_heading'] else '<!-- Treatment Overview -->'
    )
    
    # 2. Fix the badge text "The Non-Surgical Nose Job"
    if scraped['page_title']:
        # Create a treatment-appropriate badge based on category
        treatment_name = scraped['page_title'].replace('Treatment in Kampala', '').replace('in Kampala', '').strip()
        badge_text = f'Premium {treatment_name}'
        if not treatment_name:
            # Try to get from PHP variable
            cat_match = re.search(r'\$pageCategory\s*=\s*"([^"]+)"', php_content)
            if cat_match:
                badge_text = f'Expert {cat_match.group(1)}'
        
        old_badge = re.search(
            r'<span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>\s*\n\s*([^\n<]+)',
            php_content
        )
        if old_badge:
            old_text = old_badge.group(1).strip()
            php_content = php_content.replace(
                f'<span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>\n                        {old_text}',
                f'<span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>\n                        {badge_text}'
            )
    
    # 3. Fix the heading "What is <Treatment>?"
    if scraped['about_heading']:
        # Extract treatment name from the heading
        heading_text = scraped['about_heading'].strip()
        # Remove trailing question mark
        heading_text = heading_text.rstrip('?')
        
        # Find and replace the "What is" heading in PHP
        old_heading_match = re.search(
            r'<h2 class="text-section font-display text-brand-deeper mb-6 leading-\[1\.1\]">What is <br/>.*?</h2>',
            php_content, re.DOTALL
        )
        if old_heading_match:
            new_heading = f'<h2 class="text-section font-display text-brand-deeper mb-6 leading-[1.1]">What is <br/><i class="text-accent font-light">{heading_text}?</i></h2>'
            php_content = php_content.replace(old_heading_match.group(0), new_heading)
    
    # 4. Fix the description paragraph
    if scraped['about_para']:
        # Find the paragraph after the heading
        old_para_match = re.search(
            r'<p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-10 max-w-xl">\s*\n\s*([^<]+)\s*\n\s*</p>',
            php_content
        )
        if old_para_match:
            old_para = old_para_match.group(0)
            # Only replace if it contains Rhinoplasty-specific text
            if 'Liquid Rhinoplasty' in old_para or 'nose job' in old_para.lower() or 'nasal' in old_para.lower() or 'Chirag' in old_para:
                php_content = php_content.replace(
                    old_para,
                    f'<p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-10 max-w-xl">\n                        {scraped["about_para"]}\n                    </p>'
                )
    
    # 5. Fix pageTitle and pageDescription if scraped has them
    if scraped['page_title']:
        old_title_match = re.search(
            r'\$pageTitle = "([^"]+)"',
            php_content
        )
        if old_title_match:
            old_title = old_title_match.group(1)
            # Don't replace if it already seems correct (not containing Rhinoplasty)
            if 'Rhinoplasty' in old_title or 'rhinoplasty' in old_title:
                new_title = scraped['page_title'].replace('Treatment in Kampala', 'Treatment').replace('in Kampala', '')
                # Remove "& Juba" if present
                new_title = new_title.replace(' Kampala', '')
                new_title_parts = new_title.split(' - ')
                if len(new_title_parts) > 1:
                    new_title = new_title_parts[0].strip()
    
    with open(php_file, 'w', encoding='utf-8') as f:
        f.write(php_content)
    
    return scraped

def main():
    php_files = [f for f in os.listdir(PHP_DIR) if f.endswith('.php') and 'include' not in f and 'build' not in f and 'fix' not in f and 'router' not in f]
    scraped_files = os.listdir(SCRAPED_DIR) if os.path.isdir(SCRAPED_DIR) else []
    
    # Build mapping: scraped filename without .html -> PHP filename without .php
    scraped_map = {}
    for sf in scraped_files:
        if sf.endswith('.html'):
            base = sf[:-5]
            scraped_map[base] = sf
    
    fixed = 0
    not_found = []
    no_scraped = []
    
    for php_file in sorted(php_files):
        php_base = php_file[:-4]
        scraped_file = scraped_map.get(php_base)
        
        if scraped_file:
            scraped_path = os.path.join(SCRAPED_DIR, scraped_file)
            php_path = os.path.join(PHP_DIR, php_file)
            
            try:
                result = fix_php_file(php_path, scraped_path)
                fixed += 1
                print(f"✓ {php_file} <- {scraped_file} [{result['about_heading'][:50]}...]")
            except Exception as e:
                print(f"✗ {php_file}: {e}")
        else:
            no_scraped.append(php_file)
    
    print(f"\n=== Summary ===")
    print(f"Fixed: {fixed} files")
    
    if no_scraped:
        print(f"\nPHP files without scraped counterpart (need manual content):")
        for f in sorted(no_scraped):
            print(f"  - {f}")
    
    # Also show scraped files without PHP counterpart
    php_bases = {f[:-4] for f in php_files}
    missing_php = [sf for sf in scraped_map.keys() if sf not in php_bases]
    if missing_php:
        print(f"\nScraped pages without PHP counterpart (need to be created):")
        for f in sorted(missing_php):
            print(f"  - {f}.html -> {f}.php")

if __name__ == '__main__':
    main()
