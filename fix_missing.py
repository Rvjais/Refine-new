import requests
import os

url = "https://refineskinandbody.com/under-eye-treatment-kampala-juba"
filepath = "/home/veer/Ranveer/refine/scraped_site/pages/under-eye-treatment-kampala-juba.html"

print(f"Fetching {url}...")
try:
    response = requests.get(url, timeout=10)
    if response.status_code == 200:
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(response.text)
        print("Successfully saved to", filepath)
    else:
        print(f"Failed to fetch. Status code: {response.status_code}")
except Exception as e:
    print(f"Error: {e}")
