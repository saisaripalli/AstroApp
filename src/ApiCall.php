<?php
include 'VedicRishiClient.php';

class ApiCall
{
    public function __construct()
    {
    }

    public function getData($apiName,array $data)
    {
        $resourceName = $apiName;
        $userId = '5015';
        $apiKey ='7265c7c1014420abc911c49c44cf5e92';

        $vedicRishi = new VedicRishiClient($userId, $apiKey);

        $data = array(

            'date' => $data['day'],
            'month' => $data['month'],
            'year' => $data['year'],
            'hour' => $data['hour'],
            'minute' => $data['min'],
            'latitude' => $data['lat'],
            'longitude' => $data['lon'],
            'timezone' =>  $data['tzone']
        );


        $responseData = $vedicRishi->call($resourceName, $data['date'], $data['month'], $data['year'], $data['hour'], $data['minute'], $data['latitude'], $data['longitude'], $data['timezone']);
        return json_decode($responseData, true);

    }
    
}

?>