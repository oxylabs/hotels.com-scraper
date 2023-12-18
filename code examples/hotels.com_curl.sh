curl --user user:pass \
'https://realtime.oxylabs.io/v1/queries' \
-H "Content-Type: application/json" \
-d '{"source": "universal", "url": "https://www.hotels.com/hotel-search?regionid=84&latlong=53.412911%2c-8.24389&startdate=2023-12-27&d1=2023-12-27&enddate=2023-12-29&d2=2023-12-29&rooms=1&adults=2&amenities=ocean_view&destination=ireland"}'