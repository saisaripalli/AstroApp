<?php
/**
 * A php file to test the Vedic Rishi Client class
 * Author: Chandan Tiwari
 * Date: 06/12/14
 * Time: 5:42 PM
 */
include ('VedicRishiClient.php'); 
$userId = '5015';
$apiKey ='254079142b19012f87a3cfffcb6d42cb';
// make some dummy data in order to call vedic rishi api
$data = array(
    'date' => 12,
    'month' => 04,
    'year' => 1985,
    'hour' => 15,
    'minute' => 05,
    'latitude' => 17.70,
    'longitude' => 83.25,
    'timezone' => 5.5
);
// api name which is to be called
$resourceName = "birth_details";
// instantiate VedicRishiClient class
$vedicRishi = new VedicRishiClient($userId, $apiKey);
// call horoscope apis
$responseData = $vedicRishi->call($resourceName, $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']);
// print response data
echo $responseData;