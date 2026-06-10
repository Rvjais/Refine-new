import os
import glob
import re

PHP_DIR = "/home/veer/Ranveer/refine"
ASSETS_DIRS = [
    "/home/veer/Ranveer/refine/assets/imagesfromsite",
    "/home/veer/Ranveer/refine/assets/imagesfromsite/services",
]

# Get all images
all_images = []
for d in ASSETS_DIRS:
    if os.path.exists(d):
        for ext in ('*.png', '*.jpg', '*.webp', '*.jpeg'):
            all_images.extend(glob.glob(os.path.join(d, ext)))

for root, _, files in os.walk("/home/veer/Ranveer/refine/assets/images/services"):
    for f in files:
        if f.lower().endswith(('.png', '.jpg', '.webp', '.jpeg')):
            all_images.append(os.path.join(root, f))

def get_best_image(filename):
    basename = filename.replace('-kampala-juba.php', '').replace('.php', '')
    keywords = basename.split('-')
    
    # Try exact match or subset match
    best_match = None
    max_score = 0
    for img_path in all_images:
        img_name = os.path.basename(img_path).lower()
        score = sum(1 for k in keywords if k.lower() in img_name and len(k) > 2)
        if score > max_score:
            max_score = score
            best_match = img_path
            
    if best_match:
        # Convert absolute path to relative path from docroot
        return best_match.replace("/home/veer/Ranveer/refine", "")
    
    return "/assets/imagesfromsite/doc.webp" # Default fallback

php_files = glob.glob(os.path.join(PHP_DIR, '*kampala*.php'))

for filepath in php_files:
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
        
    # 1. Replace Image
    best_img = get_best_image(filename)
    
    # We want to replace the rhinoplasty image with the best matched image
    content = re.sub(
        r'src="/assets/imagesfromsite/Liquid-Rhinoplasty_09\.png"',
        f'src="{best_img}"',
        content
    )
    
    # 2. Fix dummy content if it's still Rhinoplasty
    if 'What is <br/><i class="text-accent font-light">Liquid Rhinoplasty?</i>' in content:
        # This page was skipped. Let's generate generic content for it.
        service_name = filename.replace('-kampala-juba.php', '').replace('-', ' ').title()
        
        # Replace Title
        content = content.replace(
            'What is <br/><i class="text-accent font-light">Liquid Rhinoplasty?</i>',
            f'What is <br/><i class="text-accent font-light">{service_name}?</i>'
        )
        
        # Replace Intro
        content = re.sub(
            r'Liquid Rhinoplasty, often termed a non-surgical nose job, employs fillers to tweak the nose\'s shape and profile without the downtime and invasiveness of surgery\. Dr Chirag Kotecha masterfully uses this technique, delivering astounding results highlighting a patient\'s natural beauty\.',
            f'Experience top-tier {service_name} at Refine Skin and Body Clinic. Our advanced approach ensures optimal results tailored to your unique needs, helping you achieve your aesthetic goals safely and effectively under the guidance of our expert team.',
            content
        )
        
        # Replace Conditions Grid dummy text
        content = content.replace("Dorsal Humps &amp; Bumps", "Target Area 1")
        content = content.replace("Dorsal Humps & Bumps", "Target Area 1")
        content = content.replace("Asymmetry", "Target Area 2")
        content = content.replace("Tip Elevation", "Target Area 3")
        content = content.replace("Bridge Enhancement", "Target Area 4")
        content = content.replace("Post-Surgical Fixes", "Target Area 5")
        
        # Replace Myths & Facts
        content = content.replace('"Results from Liquid Rhinoplasty are permanent."', f'"Results from {service_name} are instantaneous and permanent without any maintenance."')
        content = content.replace('The effects last gracefully between 6-18 months, varying beautifully per individual.', 'While highly effective, results vary per individual and may require occasional maintenance sessions to preserve optimal outcomes.')
        
        # Replace FAQ "What is the cost of Liquid Rhinoplasty in Uganda?"
        content = content.replace("What is the cost of Liquid Rhinoplasty in Uganda?", f"What is the cost of {service_name} in Uganda?")
        content = content.replace("Liquid Rhinoplasty cost in Uganda varies depending upon several individual factors. The premium Liquid Rhinoplasty service at Refine Skin & Body Clinic typically starts from $500.", f"The cost for {service_name} varies depending on your individual requirements. Please contact Refine Skin & Body Clinic for a personalized consultation and quote.")
        
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
        
print("Finished replacing images and fixing missing content!")
