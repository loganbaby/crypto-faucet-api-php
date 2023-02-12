<?php

use \Mahtab2003\FaucetPay\Api;

// Create a new Api class instance.
$api = new Api('API Key', 'BTC');

// Get the balance of the faucet.
$response = $api->getBalance();

// Check whether the request was successful.
if ($response->isSuccessful()) {
   $data = $response->getData();
   echo 'Your faucet balance is: ' . $data['balance'];
} else {
   echo 'Error: ' . $response->getMessage();
}

?>