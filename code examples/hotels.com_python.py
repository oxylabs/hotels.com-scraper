import requests
from pprint import pprint

# Structure payload.
payload = {
    'source': 'universal',
    'url': 'https://www.hotels.com/hotel-search?regionid=84&latlong=53.412911%2c-8.24389&startdate=2023-12-27&d1=2023-12-27&enddate=2023-12-29&d2=2023-12-29&rooms=1&adults=2&amenities=ocean_view&destination=ireland'
}

# Get response.
response = requests.request(
    'POST',
    'https://realtime.oxylabs.io/v1/queries',
    auth=('user', 'pass1'),
    json=payload,
)

# Instead of response with job status and results url, this will return the
# JSON response with the result.
pprint(response.json())