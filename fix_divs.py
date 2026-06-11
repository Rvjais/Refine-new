import os
import glob

files = glob.glob('*.php')
count = 0
for f in files:
    with open(f, 'r') as file:
        content = file.read()
    
    # Define exact patterns to find
    target = 'loading="lazy">\n                    </div>\n                    </div>\n                </div>'
    replacement = 'loading="lazy">\n                    </div>\n                </div>'
    
    if target in content:
        print(f"Found and fixing in {f}")
        content = content.replace(target, replacement)
        with open(f, 'w') as file:
            file.write(content)
        count += 1

print(f"Total files fixed: {count}")
