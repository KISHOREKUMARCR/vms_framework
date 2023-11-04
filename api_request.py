import requests
import json

api_url = 'http://10.0.0.84/CodeIgniter3/vms_framework/api/new_one'

data = {
    "System Info": {
        "hostname": "raspberrypi",
        "modify_time":"0000-00-00 00:00:00",
        "server_address": "10.0.0.152",
        "server_port": 80
    },
    "CPU": {
        "Usage Percentage": 13.4,
        "Number of Cores": 4,
        "CPU Frequency": 1500,
        "CPU Frequency_khz": 1500,
        "CPU Temperature": 50.147
        },
    "Memory": {
        "Usage Percentage": 64.84715929367914,
        "Total Memory": 3.6556930541992188,
        "Used Memory": 1.0593032836914062,
        "Free Memory": 2.3706130981445312
    },
    "Disk": {
                "Usage Percentage": "45.3",
                "Disk Space Used": "24.2",
                "Available Disk Space": "29.18",
                "Total Disk Space": "56.27"
    },
    "Drive_momory": {
                "drive_total_space_gb": "15.00",
                "drive_free_space_gb": "3.49",
                "drive_used_space_gb": "11.51",
                "drive_free_space_percentage": "23.27"
    },
    "Hardware_status": "Bus 002 Device 001: ID 1d6b:0003 Linux Foundation 3.0 root hub\nBus 001 Device 003: ID 0781:5567 SanDisk Corp. Cruzer Blade\nBus 001 Device 002: ID 2109:3431 VIA Labs, Inc. Hub\nBus 001 Device 001: ID 1d6b:0002 Linux Foundation 2.0 root hub\n",
    "kit_status": "true",
    "kit_id": "COSAI_VMS_439",
                "Memory_status": {
                "memtotal": "3.7Gi",
                "memused": "1.1Gi",
                "memfree": "923Mi",
                "memavailable": "2.4Gi"
    }
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
