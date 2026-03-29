#!/usr/bin/env python3
"""
MarketingBoost API Automation for MoreValueCoupons
Use this script to automatically send vacation incentives to customers.
Uses urllib (standard library) - no pip needed!
"""

import urllib.request
import urllib.parse
import json
import sys

# MarketingBoost API Configuration
API_KEY = "6MSdpHmtr3bCagpoOkRumjrR1XRuBI1ySobd5j1x6CpcZ0yw8298LSUrljQ7VZ7s"
SENDER_ID = "41792-43481"
BUSINESS_ID = "49158"

# Destination IDs
DESTINATIONS = {
    "bali": "49",
    "cancun": "10",
    "dubai": "20",
    "lasvegas": "41",
    "phuket": "3",
    "puertvallarta": "48"
}

# Hotel saving card amounts
HOTEL_AMOUNTS = ["100", "200", "300", "500"]

# Dining voucher amounts
DINING_AMOUNTS = ["25", "50", "100", "200"]

BASE_URL = "https://members.marketingboost.com/api"

HEADERS = {
    "X-Api-Key": API_KEY,
    "Content-Type": "application/json",
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36"
}

def make_request(url, data=None):
    """Make HTTP request to MarketingBoost API."""
    req = urllib.request.Request(url, headers=HEADERS)
    if data:
        req.data = json.dumps(data).encode('utf-8')
    
    try:
        with urllib.request.urlopen(req, timeout=30) as response:
            return json.loads(response.read().decode('utf-8'))
    except urllib.error.HTTPError as e:
        return {"error": e.read().decode('utf-8') if e.fp else str(e)}

def send_vacation_incentive(name, email, destination_id, phone=None, message=None):
    """Send a vacation incentive voucher to a customer."""
    url = f"{BASE_URL}/vacation-incentives/send"
    
    data = {
        "sender": SENDER_ID,
        "business": BUSINESS_ID,
        "destination": destination_id,
        "name": name,
        "email": email
    }
    
    if phone:
        data["phone"] = phone
    if message:
        data["message"] = message
    
    return make_request(url, data)

def send_hotel_saving_card(name, email, amount, message=None):
    """Send a hotel saving card to a customer."""
    url = f"{BASE_URL}/hotel_saving_api/send"
    
    data = {
        "sender": SENDER_ID,
        "business": BUSINESS_ID,
        "full_name": name,
        "email": email,
        "amount": amount
    }
    
    if message:
        data["message"] = message
    
    return make_request(url, data)

def send_dining_voucher(name, email, amount, message=None):
    """Send a dining voucher to a customer."""
    url = f"{BASE_URL}/restaurants_api/send"
    
    data = {
        "sender": SENDER_ID,
        "business": BUSINESS_ID,
        "full_name": name,
        "email": email,
        "amount": amount
    }
    
    if message:
        data["message"] = message
    
    return make_request(url, data)

def get_destinations():
    """Get list of available destinations."""
    url = f"{BASE_URL}/all-destination-list/{SENDER_ID}"
    return make_request(url)

# Example usage
if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("Usage: python marketingboost.py <command> [args]")
        print("\nCommands:")
        print("  destinations              - List available destinations")
        print("  vacation <name> <email> <dest> [phone] - Send vacation voucher")
        print("  hotel <name> <email> <amount>           - Send hotel saving card")
        print("  dining <name> <email> <amount>          - Send dining voucher")
        print("\nExamples:")
        print("  python marketingboost.py destinations")
        print("  python marketingboost.py vacation 'John Doe' john@email.com lasvegas")
        print("  python marketingboost.py hotel 'John Doe' john@email.com 200")
        print("  python marketingboost.py dining 'John Doe' john@email.com 50")
        sys.exit(1)
    
    command = sys.argv[1].lower()
    
    if command == "destinations":
        result = get_destinations()
        print(json.dumps(result, indent=2))
    
    elif command == "vacation":
        if len(sys.argv) < 5:
            print("Error: vacation requires name, email, destination")
            print("Usage: python marketingboost.py vacation 'Name' email@.com dest")
            print(f"Destinations: {', '.join(DESTINATIONS.keys())}")
            sys.exit(1)
        name = sys.argv[2]
        email = sys.argv[3]
        dest = sys.argv[4].lower()
        dest_id = DESTINATIONS.get(dest)
        if not dest_id:
            print(f"Error: Unknown destination. Use: {', '.join(DESTINATIONS.keys())}")
            sys.exit(1)
        phone = sys.argv[5] if len(sys.argv) > 5 else None
        result = send_vacation_incentive(name, email, dest_id, phone)
        print(json.dumps(result, indent=2))
    
    elif command == "hotel":
        if len(sys.argv) < 5:
            print("Error: hotel requires name, email, amount")
            print("Usage: python marketingboost.py hotel 'Name' email@.com amount")
            print(f"Amounts: {', '.join(HOTEL_AMOUNTS)}")
            sys.exit(1)
        name = sys.argv[2]
        email = sys.argv[3]
        amount = sys.argv[4]
        if amount not in HOTEL_AMOUNTS:
            print(f"Error: Invalid amount. Use: {', '.join(HOTEL_AMOUNTS)}")
            sys.exit(1)
        result = send_hotel_saving_card(name, email, amount)
        print(json.dumps(result, indent=2))
    
    elif command == "dining":
        if len(sys.argv) < 5:
            print("Error: dining requires name, email, amount")
            print("Usage: python marketingboost.py dining 'Name' email@.com amount")
            print(f"Amounts: {', '.join(DINING_AMOUNTS)}")
            sys.exit(1)
        name = sys.argv[2]
        email = sys.argv[3]
        amount = sys.argv[4]
        if amount not in DINING_AMOUNTS:
            print(f"Error: Invalid amount. Use: {', '.join(DINING_AMOUNTS)}")
            sys.exit(1)
        result = send_dining_voucher(name, email, amount)
        print(json.dumps(result, indent=2))
    
    else:
        print(f"Unknown command: {command}")
        sys.exit(1)