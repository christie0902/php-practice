<?php
 
require_once 'vendor/autoload.php';

// if (class_exists('GuzzleHttp\Client')) {
//     echo 'Guzzle HTTP client is ready to be used';
// } else {
//     echo 'Guzzle HTTP client is not loaded';
// }

$client = new GuzzleHttp\Client();
 
$res = $client->request('GET', 'https://www.metacritic.com/movie/the-shawshank-redemption', [
    'verify' => false   // dont bother verifying SSL certificates
]);
 
echo $res->getBody();