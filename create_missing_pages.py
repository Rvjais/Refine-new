#!/usr/bin/env python3
"""
Create missing PHP pages from scraped HTML content.
"""
import re
import os

BASE_DIR = os.path.dirname(os.path.abspath(__file__))
SCRAPED_DIR = os.path.join(BASE_DIR, 'scraped_site', 'pages')

TEMPLATE = '''<?php
$pageCategory = "{category}";
$pageTitle = "{title}";
$pageDescription = "{description}";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- {comment} -->
    <section class="py-16 lg:py-24 bg-[#faf9f6] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/4 pointer-events-none"></div>
        
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid xl:grid-cols-2 gap-16 xl:gap-24 items-center">
                <div class="gs-reveal-text">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/10 text-accent font-body text-xs tracking-[0.2em] uppercase mb-6 font-semibold border border-accent/20">
                        <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                        {badge}
                    </div>
                    <h2 class="text-section font-display text-brand-deeper mb-6 leading-[1.1]">What is <br/><i class="text-accent font-light">{heading}?</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-10 max-w-xl">
                        {description_text}
                    </p>
                    
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[4/3] lg:aspect-auto lg:h-[450px] gs-reveal-img-group group border border-brand/5">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent z-10 opacity-60 group-hover:opacity-40 transition-opacity duration-700 pointer-events-none"></div>
                        <img src="{image}" alt="{badge} at Refine Skin and Body Clinic." class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2] group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000" loading="lazy">
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute left-8 top-10 bottom-10 w-px bg-gradient-to-b from-brand/5 via-accent/30 to-brand/5 hidden sm:block"></div>
                    <div class="space-y-8 relative z-10">
                        {why_choose_items}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {extra_sections}

    <?php include 'includes/appointment-form.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
'''

WHY_CHOOSE_ITEM = '''<div class="flex gap-6 items-start gs-reveal-text">
    <div class="w-12 h-12 rounded-2xl bg-accent/10 border border-accent/20 flex items-center justify-center flex-shrink-0 text-accent text-lg">
        <i class="{icon}"></i>
    </div>
    <div>
        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-1.5">{title}</h4>
        <p class="text-brand-muted font-body text-sm font-light leading-relaxed">{text}</p>
    </div>
</div>'''

def extract_scraped_data(html_file):
    """Extract metadata from scraped HTML."""
    with open(html_file, 'r', encoding='utf-8') as f:
        content = f.read()
    
    h1_match = re.search(r'<h1 class="h1-sm">([^<]+)</h1>', content)
    page_title = h1_match.group(1).strip() if h1_match else ''
    
    about_heading = ''
    about_para = ''
    about_section = re.search(
        r'<section class="wide-60 about-section division[^"]*"[^>]*>.*?<h3 class="h3-md">([^<]+)</h3>\s*<!-- Text -->\s*<p class="txt-color-05">([^<]+)',
        content, re.DOTALL
    )
    if about_section:
        about_heading = about_section.group(1).strip()
        about_para = about_section.group(2).strip()
    
    return {
        'page_title': page_title,
        'about_heading': about_heading,
        'about_para': about_para,
    }

def create_page(scraped_filename, php_filename, category, badge, heading, image, description, why_choose_items, extra_sections=''):
    """Create a PHP page from scraped data."""
    scraped_path = os.path.join(SCRAPED_DIR, scraped_filename)
    
    data = {'page_title': '', 'about_heading': '', 'about_para': ''}
    if os.path.exists(scraped_path):
        data = extract_scraped_data(scraped_path)
    
    title = data['page_title'] if data['page_title'] else heading
    about_h = data['about_heading'] if data['about_heading'] else heading
    about_p = data['about_para'] if data['about_para'] else description
    
    comment = about_h
    
    items_html = ''
    for item in why_choose_items:
        items_html += WHY_CHOOSE_ITEM.format(**item)
    
    php_content = TEMPLATE.format(
        category=category,
        title=title,
        description=title,
        comment=comment,
        badge=badge,
        heading=about_h,
        description_text=about_p,
        image=image,
        why_choose_items=items_html,
        extra_sections=extra_sections,
    )
    
    php_path = os.path.join(BASE_DIR, php_filename)
    with open(php_path, 'w', encoding='utf-8') as f:
        f.write(php_content)
    
    print(f"Created: {php_filename}")
    return php_filename

def main():
    pages = [
        # (scraped_html, php_filename, category, badge, heading, image, description, why_choose_items)
        
        # Scar Treatment
        ('scar-treatment-kampala-juba.html', 'scar-treatment-kampala-juba.php', 'Medical Dermatology',
         'Scar Revision & Removal', 'Scar Treatment', '/assets/imagesfromsite/dermatology-new-09.webp',
         'Advanced scar treatment options at Refine Skin and Body Clinic using laser, microneedling, and chemical peels to reduce the appearance of scars and restore smooth, healthy skin.',
         [
             {'icon': 'fa-solid fa-star', 'title': 'Advanced Technology', 'text': 'State-of-the-art laser and RF devices for effective scar reduction.'},
             {'icon': 'fa-solid fa-user-md', 'title': 'Expert Dermatologists', 'text': 'Consult with experienced specialists who tailor treatments to your skin type.'},
             {'icon': 'fa-solid fa-shield', 'title': 'Safe & Proven', 'text': 'Clinically proven methods with minimal downtime and lasting results.'},
         ]),
        
        # Hair Loss Treatment
        ('hair-loss-treatment-kampala-juba.html', 'hair-loss-treatment-kampala-juba.php', 'Hair Restoration',
         'Hair Loss Prevention', 'Hair Loss Treatment', '/assets/imagesfromsite/prp-hair-restoration-09.png',
         'Comprehensive hair loss prevention and treatment solutions at Refine Skin and Body Clinic, combining PRP therapy, medications, and advanced laser treatments to restore hair health.',
         [
             {'icon': 'fa-solid fa-flask', 'title': 'Science-Backed Solutions', 'text': 'Evidence-based treatments including PRP, GFC, QR678, and low-level laser therapy.'},
             {'icon': 'fa-solid fa-user-check', 'title': 'Personalised Plans', 'text': 'Custom treatment protocols designed for your specific hair loss pattern and goals.'},
             {'icon': 'fa-solid fa-chart-line', 'title': 'Proven Results', 'text': 'Track record of helping patients regrow and maintain healthy hair.'},
         ]),
        
        # Hyperpigmentation/Melasma
        ('Hyperpigmentation-Melasma-treatment-kampala-juba.html', 'Hyperpigmentation-Melasma-treatment-kampala-juba.php', 'Medical Dermatology',
         'Pigmentation & Melasma Treatment', 'Hyperpigmentation & Melasma Treatment', '/assets/imagesfromsite/dermatology-new-09.webp',
         'Effective treatment for hyperpigmentation, melasma, and dark spots at Refine Skin and Body Clinic using advanced dermatological techniques.',
         [
             {'icon': 'fa-solid fa-sun', 'title': 'Targeted Treatment', 'text': 'Address melasma, sun spots, post-inflammatory hyperpigmentation with precision.'},
             {'icon': 'fa-solid fa-flask', 'title': 'Advanced Therapies', 'text': 'Combination of peels, lasers, and topical treatments for optimal results.'},
             {'icon': 'fa-solid fa-shield', 'title': 'Long-Lasting Results', 'text': 'Comprehensive approach to prevent recurrence and maintain even skin tone.'},
         ]),
        
        # Thread Lifting
        ('thread-lifting-treatment-kampala-juba.html', 'thread-lifting-treatment-kampala-juba.php', 'Cosmetic Dermatology',
         'Non-Surgical Face Lift', 'Thread Lifting', '/assets/imagesfromsite/Facial-Spa-09.webp',
         'Elevate your beauty with thread lifting at Refine Skin and Body Clinic — a non-surgical facelift that lifts sagging skin, redefines contours, and rejuvenates your appearance.',
         [
             {'icon': 'fa-solid fa-arrow-up', 'title': 'Instant Lift', 'text': 'Immediate visible lifting and tightening of facial contours without surgery.'},
             {'icon': 'fa-solid fa-clock', 'title': 'Minimal Downtime', 'text': 'Return to your daily activities quickly with minimal recovery needed.'},
             {'icon': 'fa-solid fa-heart', 'title': 'Natural Results', 'text': 'Stimulates your own collagen production for gradual, natural-looking improvement.'},
         ]),
        
        # Body Contouring (currently a 301 redirect)
        ('body-contouring-kampala-juba.html', 'body-contouring-kampala-juba.php', 'Body Contouring',
         'Body Sculpting & Contouring', 'Body Contouring', '/assets/imagesfromsite/Em body sculpt-09.webp',
         'Comprehensive body contouring solutions at Refine Skin and Body Clinic — from non-surgical fat reduction to surgical sculpting for a more defined physique.',
         [
             {'icon': 'fa-solid fa-weight-scale', 'title': 'Non-Surgical Options', 'text': 'Cryolipolysis, EM Body Sculpt, and Vaser Liposuction for targeted fat reduction.'},
             {'icon': 'fa-solid fa-user-md', 'title': 'Expert Surgical Team', 'text': 'Board-certified surgeons for liposuction, tummy tucks, and body lifts.'},
             {'icon': 'fa-solid fa-chart-line', 'title': 'Customised Plans', 'text': 'Personalised treatment plans tailored to your body type and aesthetic goals.'},
         ]),
    ]
    
    for scraped, php, category, badge, heading, image, description, items in pages:
        create_page(scraped, php, category, badge, heading, image, description, items)
    
    print(f"\n=== Created {len(pages)} missing pages ===")
    print("Now update router.php and navigation menus to include these pages.")

if __name__ == '__main__':
    main()
