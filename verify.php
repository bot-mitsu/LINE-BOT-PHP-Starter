<?php
$access_token = 'sIzWEFM/9WTOcMVyC3WSh5Ij8QqokPdTxKxuolKX8Fi4k5T8WxdhJ4W++/AN+BsfKz9C58md2xP5gXeFoTLXoHIEsVVq8I8MdNuJr9mF4D5jVgIBNS9LL7ELPJ+GOWhIbY/YXfO5LRU0+3/Rnv3fCwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
