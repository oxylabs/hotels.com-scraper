<?php

$params = [
    'source' => 'universal',
    'url' => 'https://www.hotels.com/hotel-search?regionid=84&latlong=53.412911%2c-8.24389&startdate=2023-12-27&d1=2023-12-27&enddate=2023-12-29&d2=2023-12-29&rooms=1&adults=2&amenities=ocean_view&destination=ireland'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://realtime.oxylabs.io/v1/queries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "user" . ":" . "pass1");

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>