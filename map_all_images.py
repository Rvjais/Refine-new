import os
import glob
import re

PHP_DIR = "/home/veer/Ranveer/refine"
IMAGE_LIST_FILE = "/home/veer/Ranveer/refine/all_images_list.txt"

# 1. Load all images
with open(IMAGE_LIST_FILE, 'r') as f:
    all_images = [line.strip() for line in f if line.strip()]

def get_best_image(filename):
    basename = filename.replace('-kampala-juba.php', '').replace('.php', '').lower()
    # Split by dashes and filter short words
    keywords = [k for k in basename.split('-') if len(k) > 2]
    
    basename_no_dashes = basename.replace('-', ' ')
    
    best_match = None
    max_score = 0
    
    for img_path in all_images:
        img_name = os.path.basename(img_path).lower()
        img_name_no_ext = os.path.splitext(img_name)[0].replace('-', ' ').replace('_', ' ')
        parent_dir = os.path.basename(os.path.dirname(img_path)).lower()
        
        score = 0
        
        # Exact name match
        if basename_no_dashes == img_name_no_ext:
            score += 20
            
        # Substring exact match
        if basename_no_dashes in img_name_no_ext:
            score += 10
        elif img_name_no_ext in basename_no_dashes and len(img_name_no_ext) > 3:
            score += 8
            
        # Keyword matches
        for k in keywords:
            if k in img_name_no_ext.split(' '):
                score += 3
            elif k in img_name:
                score += 1
                
        # Context/Folder match
        for k in keywords:
            if k in parent_dir:
                score += 2
                
        # Negative scoring to avoid mixups (e.g. laser hair vs laser tattoo)
        # If image has keywords not in the service
        img_words = img_name_no_ext.split(' ')
        for iw in img_words:
            if len(iw) > 3 and iw not in keywords and iw not in ['treatment', 'kampala', 'juba', 'hero', '01', '09', 'bread', 'brad']:
                score -= 1
                
        if score > max_score:
            max_score = score
            best_match = img_path
            
    # Fallback to an aesthetic default if score is too low
    if max_score < 3:
        best_match = "/home/veer/Ranveer/refine/assets/imagesfromsite/doc.webp"
        
    return best_match.replace("/home/veer/Ranveer/refine", ""), max_score

php_files = glob.glob(os.path.join(PHP_DIR, '*kampala-juba.php'))

log_lines = []

for filepath in php_files:
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
        
    service_name = filename.replace('-kampala-juba.php', '').replace('-', ' ').title()
    best_img_relative, score = get_best_image(filename)
    
    # URL encode spaces in path
    best_img_safe = best_img_relative.replace(' ', '%20')
    
    log_lines.append(f"{service_name.ljust(40)} | Score: {str(score).ljust(3)} | {best_img_relative}")

    def replacer(match):
        img_tag = match.group(0)
        if 'dr_chirag' in img_tag or 'dr-chirag' in img_tag:
            return img_tag
            
        new_tag = re.sub(r'src="[^"]+"', f'src="{best_img_safe}"', img_tag)
        new_tag = re.sub(r'alt="[^"]+"', f'alt="{service_name} at Refine Skin and Body Clinic."', new_tag)
        return new_tag

    # Replace only the first gs-reveal-img
    content = re.sub(r'<img[^>]+gs-reveal-img[^>]+>', replacer, content, count=1)
    
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)

with open("/home/veer/Ranveer/refine/image_mapping_log.txt", "w") as f:
    f.write("\n".join(log_lines))
    
print("Finished applying all images! Check image_mapping_log.txt for details.")
