<?php
$access_token = 'lxHzCcE0njkrkq2NZE4nr848yPLh8y2L5wjGX+ytsnJOjTiNnck6weDpfoOduanQpTOlKtxcjPmbB9lWk7PBuy92+L7xCjAHlcRNcgQu4t7dmZULOBaFsaOyWMld2dWUQM7yM2LXhsyPktctaVZ/qwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
