<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://auth.reloadly.com/oauth/token");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);

//Decide which one you want to use
$testing = "https://topups-sandbox.reloadly.com";
$live = "https://topups.reloadly.com";

$requestBody = json_encode([
    "client_id" => "YOUR_CLIENT_ID_HERE",
    "client_secret" => "YOUR_CLIENT_SECRET_HERE",
    "grant_type" => "client_credentials",
    "audience" => $live
]);

curl_setopt($ch, CURLOPT_POSTFIELDS, $requestBody);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Accept: application/json"
]);

$response = curl_exec($ch);
curl_close($ch);
echo $response;
