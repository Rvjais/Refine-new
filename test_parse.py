import requests
from bs4 import BeautifulSoup
import json

url = "https://refineskinandbody.com/acne-treatment-kampala-juba"
response = requests.get(url)
soup = BeautifulSoup(response.text, 'html.parser')

print("=== H2 Tags ===")
for h2 in soup.find_all('h2'):
    print(h2.text.strip())
    
print("\n=== H3 Tags ===")
for h3 in soup.find_all('h3'):
    print(h3.text.strip())

print("\n=== H4 Tags ===")
for h4 in soup.find_all('h4'):
    print(h4.text.strip())
