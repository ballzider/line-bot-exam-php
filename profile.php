<?php


$access_token = 'oklVPUB0cPJytDgXcwCvq+RGA5F8c4s5Q/ahxIzccEsvo1hbTqewS0I+yhkNvw2LlsMkhqWwgkOeo3URrorvdIVNRj0V0/+97rd/xif2L5DxP/bXApdXPNQHMmxHe2syEQa1tMMJjntR/li4ahJe/QdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

