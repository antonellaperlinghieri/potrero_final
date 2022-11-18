<?php
// Using default PHP curl library
$ch = curl_init('https://realemail.expeditedaddons.com/?api_key=76IVPDCN329TQBMO9JF388AZ1420Y4ELR0UGH6SW15K5X7&email=antonellaperlinghieri19988@gmail.com.org&fix_typos=false');

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>
