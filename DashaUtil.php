<?php

require_once __DIR__ . '/vendor/autoload.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use AstroApp\Dasha\Dasha;
use AstroApp\Ganita\Method\Swetest;
use AstroApp\Base\Locality;
use AstroApp\Base\Data;
use AstroApp\Ganita\Astro;
use AstroApp\Ganita\Ayanamsha;
use AstroApp\Graha\Graha;
use AstroApp\Dasha\Object\AbstractDasha;
use AstroApp\Dasha\Object\Vimshottari;

/**
 * Description of DashaUtil
 * There can be lot improvement in structure
 * and it can be made more loosely coupled, modular
 * @author sai
 */
class DashaUtil {

    public function getDashaInstance() {
        $dashaPeriod = array(Dasha::NESTING_1 => 'mahadasha', Dasha::NESTING_2 => 'antardasha', Dasha::NESTING_3 => 'pratyantardasha');
        $type = Dasha::TYPE_VIMSHOTTARI;
        $dashaObject = Dasha::getInstance($type);
        
        return $dashaObject;
    }

    public function getDataInstance() {

        $data = array('longitude' => '-118.24', 'latitude' => '34.05', 'altitude' => '0');
        $swe = array('swetest' => './bin/swetest/win/', "sweph" => "./bin/swetest/");
        $swetestGanita = new Swetest($swe);
        $params = array(Data::BLOCK_GRAHA, Data::BLOCK_LAGNA, Data::BLOCK_BHAVA, Data::BLOCK_DASHA, Data::BLOCK_RISING);
        $options = array('ayanamsha' => Ayanamsha::AYANAMSHA_LAHIRI);

        $inputTime = new DateTime('NOW');
        $tz = new DateTimeZone('America/Los_Angeles');
        $inputTime->setTimezone($tz);

        echo 'input Time is: ' . date_format($inputTime, "Y-m-d H:i:s") . '<br>';
        echo ' UTC Offset: ' . $inputTime->format('P') . '<br>';
        //    echo $inputTime;
        $locality = new Locality($data);
        //echo 'Locality Obtained';
        $dataObject = new Data($inputTime, $locality, $swetestGanita);

        return $dataObject;
    }

    /**
     * 
     * @return array $dataArray
     */
    public function calcPeriod() {
        //$dashaObject = $this->getDashaInstance();
        $dataObject = $this->getDataInstance();
        $type = Dasha::TYPE_VIMSHOTTARI;
        $periodKey = 'now';
        $dashaPeriod = array(Dasha::NESTING_1 => 'mahadasha', Dasha::NESTING_2 => 'antardasha', Dasha::NESTING_3 => 'pratyantardasha');
        $dataInstance = $dataObject->calcDasha($type, $periodKey, $dashaPeriod);
        return $dataInstance->getDataArray();                
    }    
    
    /**
     * This $dataArray Object has complete information about Planet
     * positions, period and Nakshatra for given time,date and place
     * of birth.
     * @param array $dataArray
     */
    public function printDasha(array $dataArray){
        echo ' size of vimshottari data array: ' . count($dataArray, COUNT_RECURSIVE) . '<br>';
        var_dump($dataArray[Data::BLOCK_DASHA][Dasha::TYPE_VIMSHOTTARI]['periods']);
        //echo $dataArray['dasha']['vimshottari']['mahadasha'];
//        foreach ($dataArray as $key => $value) {
//          if(strcasecmp($value,Data::BLOCK_DASHA) == 0){
//              var_dump($dataArray[Data::BLOCK_DASHA]);
//          }    
//        }
        
    }
}

 $dashaUtil = new DashaUtil();
 $dataArray = $dashaUtil->calcPeriod();
 echo 'done computation'.'<br>';
 echo 'now print dasha'.'<br>';
 $dashaUtil->printDasha($dataArray);
