import requests
import json

api_url = "http://10.0.0.84/CodeIgniter3/vms_framework/api/demostring"

data = {"username": "kishore", "age": 30}

response = requests.post(api_url, json=data)

if response.status_code == 200:

    api_response = response.json()

    print(api_response)
else:
    print("Error:", response.status_code)
