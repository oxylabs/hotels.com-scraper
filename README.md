# Hotels.com Scraper API

[![Oxylabs promo code](https://user-images.githubusercontent.com/129506779/250792357-8289e25e-9c36-4dc0-a5e2-2706db797bb5.png)](https://oxylabs.go2cloud.org/aff_c?offer_id=7&aff_id=877&url_id=112)

Oxylabs’ [Hotels.com Scraper](https://oxylabs.io/products/scraper-api/web/hotelscom?utm_source=github&utm_medium=repositories&utm_campaign=product) is a data gathering solution allowing you to extract real-time information from an Hotels.com website effortlessly. This brief guide explains how an Hotels.com Scraper works and provides code examples to understand better how you can use it hassle-free.

### How it works

You can get Hotels.com results by providing your own URLs to our service. We can return the HTML for any Hotels.com page you like.

#### Python code example

The example below illustrates how you can get HTML of Hotels.com page.

```python
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
```
Find code examples for other programming languages [**here**](https://github.com/oxylabs/hotels.com-scraper/tree/main/code%20examples)

#### Output Example
```json
{
  "results": [
    {
      "content": "<!DOCTYPE html><html data-language=\"en_US\" dir=\"ltr\" lang=\"en\"><head><title></title><meta name=\"robo ... </html>",
      "created_at": "2023-12-18 11:07:12",
      "updated_at": "2023-12-18 11:07:18",
      "page": 1,
      "url": "https://www.hotels.com/hotel-search?regionid=84&latlong=53.412911%2c-8.24389&startdate=2023-12-27&d1=2023-12-27&enddate=2023-12-29&d2=2023-12-29&rooms=1&adults=2&amenities=ocean_view&destination=ireland",
      "job_id": "7142470349966279681",
      "status_code": 200
    }
  ]
}
```
With our Hotels.com Scraper, you can seamlessly gather public data from any Hotels.com web page. Compile necessary hotel information, such as room rates, customer reviews, or hotel descriptions, to study the hospitality market and get a jump on your rivals. If you need any assistance with the process, get in touch with our support team through live chat or drop us an email at hello@oxylabs.io.