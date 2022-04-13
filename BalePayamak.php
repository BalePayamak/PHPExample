<?php

// Define Variables
$url = "https://balesms.ir/v1/sendsms";
$Number = "093000000";
$apiKEY = "xxxxxxxxxxxxxxxxxxx";
$template = "xxxxxxxxx";
$Value = "1542";

$input_data = array(
    "api_key" => $apiKEY,
    "phone" => $Number,
    "template" => $template,
    "value" => $Value
    );

//  Send Request
$handler = curl_init($url);
curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($handler, CURLOPT_POSTFIELDS, $input_data);
curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($handler);
$result = json_decode($res, true)['result'];
echo $result;
