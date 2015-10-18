<?php

require_once __DIR__ . '/vendor/autoload.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use AstroApp\Ganita\Method\Swetest;
use AstroApp\Base\Locality;
use AstroApp\Base\Data;
use AstroApp\Ganita\Astro;
use AstroApp\Ganita\Ayanamsha;
use AstroApp\Graha\Graha;

try {

    $inputParams = array(Data::BLOCK_GRAHA => 'graha', Data::BLOCK_BHAVA => 'bhava', Data::BLOCK_LAGNA => 'lagna', Data::BLOCK_DASHA => 'dasha');
    //$inputParams = array(Data::BLOCK_GRAHA => 'graha');

    $outputPlanets = [
        'Sun' => Graha::KEY_SY,
        'Moon' => Graha::KEY_CH,
        'Mars' => Graha::KEY_MA,
        'Mercury' => Graha::KEY_BU,
        'Jupiter' => Graha::KEY_GU,
        'Venus' => Graha::KEY_SK,
        'Saturn' => Graha::KEY_SA,
        'meanNode' => Graha::KEY_RA,
    ];

    $rashiMap = array('1' => 'Mesha',
        '2' => 'Vrishabha',
        '3' => 'Midhuna',
        '4' => 'Karkataka',
        '5' => 'Simha',
        '6' => 'Kanya',
        '7' => 'Tula',
        '8' => 'Vrischika',
        '9' => 'Dhanur',
        '10' => 'Makara',
        '11' => 'Kumbha',
        '12' => 'Meena',
    );

    $outputLagna = 'Lg';


    echo 'About to start computation' . '<br>';
    $data = array('longitude' => '-118.24', 'latitude' => '34.05', 'altitude' => '0');
    $swe = array('swetest' => './bin/swetest/win/', "sweph" => "./bin/swetest/");
    $swetestGanita = new Swetest($swe);
    $params = array(Data::BLOCK_GRAHA, Data::BLOCK_LAGNA, Data::BLOCK_BHAVA, Data::BLOCK_DASHA, Data::BLOCK_RISING);
    $options = array('ayanamsha' => Ayanamsha::AYANAMSHA_LAHIRI);

    //   $inputTime = array('date'=>'12041985', 'time'=>'1505');

    $inputTime = new DateTime('NOW');
    //$inputTime->setTimezone('America/Los_Angeles');
    $tz = new DateTimeZone('America/Los_Angeles');
    $inputTime->setTimezone($tz);

    echo 'input Time is: ' . date_format($inputTime, "Y-m-d H:i:s") . '<br>';
    echo ' UTC Offset: ' . $inputTime->format('P') . '<br>';
    //    echo $inputTime;
    $locality = new Locality($data);
    //echo 'Locality Obtained';
    $dataObj = new Data($inputTime, $locality, $swetestGanita);
    $swetestGanita->setData($dataObj);
    //  $outputPlanets = array(Graha::S)
    /*
      echo 'printing for calcParams: ';
      $result = $dataObj->calcParams($params, $options);
      foreach ($result as $key => $value) {
      echo 'Key :' . $key . ' \t Value :' . $value;
      }
     */
    $dataParams = $swetestGanita->getParams($params, $options);

    //foreach ($dataParams as $key => $v){
    //echo ' wow ' . $dataParams[Data::BLOCK_GRAHA]['Sy']['longitude'];
    //}
    //echo 'printing for getParams';
    echo ' ' . '<br>';

    $chakraMap = [];

    foreach ($inputParams as $paramsKey => $paramsValue) {
        // echo 'Key= ' . $paramsKey . ' value= ' . $paramsValue . '<br>';

        if (strcasecmp($paramsValue, Data::BLOCK_GRAHA) == 0) {
            foreach ($outputPlanets as $planetsKey => $planetsValue) {
                //  echo 'Key= ' . $planetsKey . ' value= ' . $planetsValue . '<br>';
                // echo ' Got Rashi: ' . $dataParams[$paramsValue][$planetsValue]['rashi'] . '<br>';

                $obtainedRashi = $dataParams[$paramsValue][$planetsValue]['rashi'];

                if (array_key_exists($obtainedRashi, $rashiMap)) {
                    $chakraMap[$obtainedRashi][$planetsValue] = [
                        'longitude' => $dataParams[$paramsValue][$planetsValue]['longitude'],
                        'latitude' => $dataParams[$paramsValue][$planetsValue]['latitude'],
                        'speed' => $dataParams[$paramsValue][$planetsValue]['speed'],
                        'ascension' => $dataParams[$paramsValue][$planetsValue]['ascension'],
                        'declination' => $dataParams[$paramsValue][$planetsValue]['declination'],
                        'degree' => $dataParams[$paramsValue][$planetsValue]['degree'],
                    ];
                }
            }
        } elseif (strcasecmp($paramsValue, Data::BLOCK_LAGNA) == 0) {

            //echo ' Got Rashi For Lagna: ' . $dataParams[$paramsValue][$outputLagna]['rashi'] . '<br>';
            $obtainedRashiForLagna = $dataParams[$paramsValue][$outputLagna]['rashi'];
            $chakraMap[$obtainedRashiForLagna][$outputLagna] = [
                'longitude' => $dataParams[$paramsValue][$outputLagna]['longitude'],
                'ascension' => $dataParams[$paramsValue][$outputLagna]['ascension'],
                'declination' => $dataParams[$paramsValue][$outputLagna]['declination'],
                'degree' => $dataParams[$paramsValue][$outputLagna]['degree'],
            ];
        }
        //echo ' ' . '<br>';
    }
    //echo ' ' . '<br>';
    echo 'Print me The Chart with Planets and Positons ' . '<br>';
    echo ' ' . '<br>';

    foreach ($rashiMap as $rashiKey => $rashiValue) {
        //echo ' rashiKey: ' . $rashiKey . ' rashiValue: ' . $rashiValue;
        //echo ' number of planets in this rashi: '.count($chakraMap[$rashiKey]) .'<br>';
        if (array_key_exists($rashiKey, $chakraMap)) {
            echo ' Rashi: ' . $rashiValue . '<br>';
            var_dump($chakraMap[$rashiKey]);
        }
    }


    //echo Astro::getAsc($inputTime, $locality);
} catch (Exception $e) {
    echo 'Caught Exception : ', $e->getMessage(), "\n";
}