<?php

//echo "hi";

// start

// Textlocal account details
$username = urlencode('trlemooria');
$password = urlencode('702405');

// Message details
$phone = '9789664355';
$numbers = urlencode($phone);
$sender = urlencode('TADBEA');
$message = urlencode('Test2');

// Prepare data for POST request
$data = 'username=' . $username . '&password=' . $password . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;

//echo "http://sms99.co.in/pushsms.php?".$data;

// Send the GET request with cURL
$ch = curl_init('http://sms99.co.in/pushsms.php?'.$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
//print_r($response);
curl_close($ch);

// end
?>