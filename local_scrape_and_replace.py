import os
import glob
from bs4 import BeautifulSoup
import re

SCRAPED_DIR = "/home/veer/Ranveer/refine/scraped_site/pages"
PHP_DIR = "/home/veer/Ranveer/refine"

def clean_html(text):
    if not text:
        return ""
    text = text.replace('\n', ' ').replace('\r', '').replace('"', '&quot;')
    return ' '.join(text.split())

def scrape_local_page(filepath):
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            html = f.read()
    except Exception as e:
        print(f"Failed to read {filepath}: {e}")
        return None
        
    soup = BeautifulSoup(html, 'html.parser')
    
    data = {
        'title': '',
        'intro': '',
        'benefits': [],
        'conditions': [],
        'faqs': [],
        'myth': '',
        'fact': ''
    }
    
    # 1. Title (H1)
    h1 = soup.find('h1')
    if h1:
        data['title'] = clean_html(h1.text)
        
    # 2. Intro (Look for 'What is...' in h3 or h4)
    intro_header = soup.find(lambda tag: tag.name in ['h3', 'h4'] and 'what is' in tag.text.lower())
    if intro_header:
        p = intro_header.find_next_sibling('p')
        if p:
            data['intro'] = clean_html(p.text)
            
    # 3. Benefits / Process
    experience_header = soup.find(lambda tag: tag.name in ['h3', 'h5'] and ('experience' in tag.text.lower() or 'process' in tag.text.lower() or 'benefits' in tag.text.lower()))
    if experience_header:
        ul = experience_header.find_next_sibling('ul')
        if ul:
            for li in ul.find_all('li'):
                p = li.find('p')
                if p:
                    data['benefits'].append(clean_html(p.text))
                    
    # 4. Conditions / Target areas
    cond_header = soup.find(lambda tag: tag.name in ['h3', 'h5'] and ('conditions treated' in tag.text.lower() or 'target' in tag.text.lower() or 'conditions' in tag.text.lower()))
    if cond_header:
        ul = cond_header.find_next_sibling('ul')
        if ul:
            for li in ul.find_all('li'):
                p = li.find('p')
                if p:
                    data['conditions'].append(clean_html(p.text))
                    
    # 5. FAQs
    for q_div in soup.find_all('div', class_='question'):
        q_tag = q_div.find('h5')
        a_tag = q_div.find('p')
        if q_tag and a_tag:
            q_text = clean_html(re.sub(r'^\d+\.\s*', '', q_tag.text))
            a_text = clean_html(a_tag.text)
            data['faqs'].append({'q': q_text, 'a': a_text})
            
    # 6. Myths and Facts
    myths_header = soup.find(lambda tag: tag.name in ['h3', 'h5'] and 'myth' in tag.text.lower())
    if myths_header:
        ul = myths_header.find_next_sibling('ul')
        if ul:
            lis = ul.find_all('li')
            for li in lis:
                text = li.text
                if 'Myth:' in text:
                    data['myth'] = clean_html(text.replace('Myth:', '').strip())
                elif 'Fact:' in text:
                    data['fact'] = clean_html(text.replace('Fact:', '').strip())
                    
    return data

def process_file(html_file):
    filename = os.path.basename(html_file)
    php_filename = filename.replace('.html', '.php')
    php_filepath = os.path.join(PHP_DIR, php_filename)
    
    if not os.path.exists(php_filepath):
        print(f"Skipping {filename}: matching .php file not found")
        return
        
    print(f"Processing {filename} ...")
    data = scrape_local_page(html_file)
    if not data:
        return
        
    with open(php_filepath, 'r', encoding='utf-8') as f:
        content = f.read()
        
    # TITLE
    if data['title']:
        content = re.sub(
            r'<h2 class="font-display text-5xl lg:text-6xl text-brand-deeper mb-6 leading-\[1\.1\]">What is <br/><i class="text-accent font-light">Liquid Rhinoplasty\?</i></h2>',
            f'<h2 class="font-display text-5xl lg:text-6xl text-brand-deeper mb-6 leading-[1.1]">What is <br/><i class="text-accent font-light">{data["title"]}?</i></h2>',
            content
        )
    # INTRO
    if data['intro']:
        content = re.sub(
            r'Liquid Rhinoplasty, often termed a non-surgical nose job, employs fillers to tweak the nose\'s shape and profile without the downtime and invasiveness of surgery\. Dr Chirag Kotecha masterfully uses this technique, delivering astounding results highlighting a patient\'s natural beauty\.',
            data['intro'],
            content
        )
        
    # CONDITIONS
    dummy_conditions = [
        "Dorsal Humps &amp; Bumps", "Asymmetry", "Tip Elevation", "Bridge Enhancement", "Post-Surgical Fixes"
    ]
    dummy_conditions_alt = [
        "Dorsal Humps & Bumps", "Asymmetry", "Tip Elevation", "Bridge Enhancement", "Post-Surgical Fixes"
    ]
    dummy_cond_desc = [
        "Prominent or irregular bumps on the bridge of the nose can be masterfully smoothed and softened, creating a perfectly streamlined, straight appearance from any angle.",
        "For noses slightly off-centre or asymmetric, filler creates a flawlessly balanced and harmonious facial symmetry.",
        "A drooping or heavy nasal tip can be subtly lifted and elegantly refined, rejuvenating the overall profile.",
        "Build up and define a flat nasal bridge for individuals seeking a more pronounced, sculpted architectural structure.",
        "A minimally invasive tool to make delicate minor adjustments or brilliant corrections following a previous surgical rhinoplasty."
    ]
    
    for i in range(5):
        if i < len(data['conditions']):
            cond_text = data['conditions'][i]
            parts = cond_text.split(':')
            c_title = parts[0].strip() if len(parts) > 1 else f"Benefit {i+1}"
            c_desc = parts[1].strip() if len(parts) > 1 else cond_text
            
            content = content.replace(f'>{dummy_conditions[i]}</h4>', f'>{c_title}</h4>')
            content = content.replace(f'>{dummy_conditions_alt[i]}</h4>', f'>{c_title}</h4>')
            content = content.replace(dummy_cond_desc[i], c_desc)

    # PROCESS/BENEFITS (4 steps)
    dummy_process_titles = ["Consultation", "Preparation", "Procedure", "Post-Treatment"]
    dummy_process_desc = [
        "Discuss your aesthetic goals with Dr. Chirag and evaluate if this non-invasive treatment perfectly aligns with your desired profile.",
        "We prioritize your comfort. A premium topical numbing cream is applied to ensure a completely painless and relaxing experience.",
        "Strategic, micro-precise injections of dermal filler are administered by Dr. Chirag to reshape, elevate, and contour your nose.",
        "Receive personalized guidance to ensure lasting results. Walk out immediately with your stunning, refined new profile."
    ]
    for i in range(4):
        if i < len(data['benefits']):
            ben_text = data['benefits'][i]
            parts = ben_text.split(':')
            b_title = parts[0].strip() if len(parts) > 1 else f"Step {i+1}"
            b_desc = parts[1].strip() if len(parts) > 1 else ben_text
            
            content = content.replace(f'</span> {dummy_process_titles[i]}', f'</span> {b_title}')
            content = content.replace(dummy_process_desc[i], b_desc)
            
    # MYTHS
    if data['myth'] and data['fact']:
        content = re.sub(
            r'"Results from Liquid Rhinoplasty are permanent\."',
            f'"{data["myth"]}"',
            content
        )
        content = re.sub(
            r'The effects last gracefully between 6-18 months, varying beautifully per individual\.',
            data['fact'],
            content
        )
        
    # FAQS
    dummy_faqs = [
        "Is Liquid Rhinoplasty painful?",
        "When can I resume normal activities?",
        "Can I combine this with other treatments?",
        "What if I don't like the results?",
        "Are there any risks involved?",
        "What is the cost of Liquid Rhinoplasty in Uganda?"
    ]
    dummy_answers = [
        "Most patients experience minimal discomfort, thanks to specialized premium numbing agents applied before the procedure.",
        "Typically, right after the procedure! Just avoid heavy physical activity, extreme heat, or wearing heavy glasses for 24 hours.",
        "Absolutely. Discuss your holistic aesthetic goals with Dr. Chirag during consultation to curate a comprehensive, personalized treatment plan.",
        "One distinct advantage is the reversibility of certain hyaluronic acid fillers. Safe, precise adjustments or complete dissolving can be easily performed if needed.",
        "Like all cosmetic procedures, minor risks exist, but they are exceedingly minimal when conducted by highly experienced, anatomy-expert hands like Dr. Chirag's.",
        "Liquid Rhinoplasty cost in Uganda varies depending upon several individual factors. The premium Liquid Rhinoplasty service at Refine Skin & Body Clinic typically starts from $500."
    ]
    dummy_answers_alt = [
        "Liquid Rhinoplasty cost in Uganda varies depending upon several individual factors. The premium Liquid Rhinoplasty service at Refine Skin &amp; Body Clinic typically starts from $500."
    ]
    
    for i in range(6):
        if i < len(data['faqs']):
            q = data['faqs'][i]['q']
            a = data['faqs'][i]['a']
            content = content.replace(f"{i+1}. {dummy_faqs[i]}", f"{i+1}. {q}")
            content = content.replace(dummy_answers[i], a)
            if i == 5:
                content = content.replace(dummy_answers_alt[0], a)

    with open(php_filepath, 'w', encoding='utf-8') as f:
        f.write(content)
        
    print(f"  -> Successfully updated {php_filepath}")

html_files = glob.glob(os.path.join(SCRAPED_DIR, '*.html'))
print(f"Found {len(html_files)} HTML files. Processing...")
for f in html_files:
    process_file(f)
print("Finished!")
