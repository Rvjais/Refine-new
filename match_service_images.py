import os
import glob
import re

PHP_DIR = "/home/veer/Ranveer/refine"
SERVICES_IMG_DIR = "/home/veer/Ranveer/refine/assets/imagesfromsite/services"

# Get all images from services folder
service_images = []
for ext in ('*.png', '*.jpg', '*.webp', '*.jpeg', '*.PNG', '*.JPG', '*.WEBP'):
    service_images.extend(glob.glob(os.path.join(SERVICES_IMG_DIR, ext)))

def get_best_image(filename):
    basename = filename.replace('-kampala-juba.php', '').replace('.php', '').lower()
    keywords = [k for k in basename.split('-') if len(k) > 2]
    
    # Try to find best match
    best_match = None
    max_score = 0
    for img_path in service_images:
        img_name = os.path.basename(img_path).lower()
        
        # Calculate match score based on keywords
        score = 0
        for k in keywords:
            if k in img_name:
                score += 1
                
        # Exact substring match bonus
        basename_no_dashes = basename.replace('-', ' ')
        img_name_no_ext = os.path.splitext(img_name)[0].replace('-', ' ')
        if basename_no_dashes in img_name_no_ext or img_name_no_ext in basename_no_dashes:
            score += 5
            
        if score > max_score:
            max_score = score
            best_match = img_path
            
    if best_match:
        # Convert absolute path to relative path from docroot
        return best_match.replace("/home/veer/Ranveer/refine", "")
    
    # Fallback to a default image if no match is found (e.g., the first one, or leave as is)
    # If no match, we just return a default aesthetic image
    return "/assets/imagesfromsite/doc.webp"

php_files = glob.glob(os.path.join(PHP_DIR, '*kampala-juba.php'))

for filepath in php_files:
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
        
    # Service Name
    service_name = filename.replace('-kampala-juba.php', '').replace('-', ' ').title()
    
    # Find best image
    best_img = get_best_image(filename)
    
    # We want to replace the src and alt in the main hero image.
    # The hero image is typically the first <img ... gs-reveal-img ...>
    # Let's use a regex to find the image tag that has gs-reveal-img and replace its src and alt.
    
    def replacer(match):
        img_tag = match.group(0)
        # Only replace if it's not the doctor image
        if 'dr_chirag' in img_tag or 'dr-chirag' in img_tag:
            return img_tag
            
        # Replace src
        new_tag = re.sub(r'src="[^"]+"', f'src="{best_img}"', img_tag)
        # Replace alt
        new_tag = re.sub(r'alt="[^"]+"', f'alt="A patient receiving {service_name} at Refine Skin and Body Clinic."', new_tag)
        return new_tag

    # We only want to replace the first occurrence of the gs-reveal-img that is not dr_chirag.
    # The image might look like: <img src="..." alt="..." class="... gs-reveal-img ..." loading="...">
    # Let's replace all img tags that have gs-reveal-img and are in the hero section.
    
    # Regex to find img tags with gs-reveal-img
    content = re.sub(r'<img[^>]+gs-reveal-img[^>]+>', replacer, content, count=1)
    
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
        
print("Finished applying specific service images!")
