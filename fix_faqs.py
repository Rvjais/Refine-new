import os
import glob
import re

PHP_DIR = "/home/veer/Ranveer/refine"

php_files = glob.glob(os.path.join(PHP_DIR, '*kampala*.php'))
# Add any others that might have been updated
php_files.extend(glob.glob(os.path.join(PHP_DIR, 'body-contouring.php')))
php_files.extend(glob.glob(os.path.join(PHP_DIR, 'skin-tightening.php')))

for filepath in set(php_files):
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()
        
    service_name = filename.replace('-kampala-juba.php', '').replace('.php', '').replace('-', ' ').title()
    if 'liquid rhinoplasty' in service_name.lower() and 'non' not in service_name.lower():
        continue # don't accidentally ruin the real rhinoplasty page if it's there
    
    # 1. Fix the FAQ subtitle
    content = content.replace(
        "Explore our comprehensive FAQ section for quick answers to common queries about Liquid Rhinoplasty.",
        f"Explore our comprehensive FAQ section for quick answers to common queries about {service_name}."
    )
    
    # 2. Fix leftover dummy questions that might be present
    content = content.replace("1. Is Liquid Rhinoplasty painful?", f"1. Is {service_name} painful?")
    content = content.replace("Most patients experience minimal discomfort, thanks to specialized premium numbing agents applied before the procedure.", f"Most patients experience minimal discomfort. We prioritize your comfort throughout the {service_name} procedure.")
    
    content = content.replace("2. When can I resume normal activities?", f"2. When can I resume normal activities after {service_name}?")
    content = content.replace("Typically, right after the procedure! Just avoid heavy physical activity, extreme heat, or wearing heavy glasses for 24 hours.", "Recovery time varies, but many patients can resume normal activities shortly after the procedure. Your specialist will provide specific aftercare instructions.")
    
    content = content.replace("3. Can I combine this with other treatments?", f"3. Can I combine {service_name} with other treatments?")
    content = content.replace("Absolutely. Discuss your holistic aesthetic goals with Dr. Chirag during consultation to curate a comprehensive, personalized treatment plan.", "Absolutely. Discuss your holistic aesthetic goals during your consultation to curate a comprehensive, personalized treatment plan.")
    
    content = content.replace("4. What if I don't like the results?", f"4. When will I see results from {service_name}?")
    content = content.replace("One distinct advantage is the reversibility of certain hyaluronic acid fillers. Safe, precise adjustments or complete dissolving can be easily performed if needed.", "Results can vary depending on the individual and the specifics of the treatment. Many notice improvements quickly, while optimal results may develop over time.")
    
    content = content.replace("5. Are there any risks involved?", f"5. Are there any risks involved with {service_name}?")
    content = content.replace("Like all cosmetic procedures, minor risks exist, but they are exceedingly minimal when conducted by highly experienced, anatomy-expert hands like Dr. Chirag's.", "Like all procedures, minor risks exist, but they are exceedingly minimal when conducted by highly experienced specialists. We will discuss all potential risks during your consultation.")
    
    content = content.replace("6. What is the cost of Liquid Rhinoplasty in Uganda?", f"6. What is the cost of {service_name} in Uganda?")
    content = content.replace("Liquid Rhinoplasty cost in Uganda varies depending upon several individual factors. The premium Liquid Rhinoplasty service at Refine Skin &amp; Body Clinic typically starts from $500.", f"The cost for {service_name} varies depending on your individual requirements. Please contact Refine Skin & Body Clinic for a personalized consultation and quote.")
    content = content.replace("Liquid Rhinoplasty cost in Uganda varies depending upon several individual factors. The premium Liquid Rhinoplasty service at Refine Skin & Body Clinic typically starts from $500.", f"The cost for {service_name} varies depending on your individual requirements. Please contact Refine Skin & Body Clinic for a personalized consultation and quote.")

    # 3. Double check for any other random instances of "Liquid Rhinoplasty" dummy text in the file that shouldn't be there
    content = content.replace("results from Liquid Rhinoplasty", f"results from {service_name}")
    content = content.replace("Results from Liquid Rhinoplasty", f"Results from {service_name}")
    
    # 4. Target Areas section "Liquid Rhinoplasty is remarkably versatile."
    content = content.replace("Liquid Rhinoplasty is remarkably versatile.", f"This treatment is remarkably versatile.")

    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)
        
print("Finished fixing FAQ sections and leftovers!")
