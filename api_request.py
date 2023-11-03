import requests
import json

api_url = 'http://10.0.0.84/CodeIgniter3/vms_framework/api/postdata'

data = {
    "key":"kishore"
}

data_json = json.dumps(data)
headers = {'Content-Type': 'application/json'}
response = requests.post(api_url, data=data_json, headers=headers)

if response.status_code == 200:
    print("POST request successful!")
    print("Response content:", response.text)

else:
    print("POST request failed with status code:", response.status_code)
    print("Response text:", response.text)
