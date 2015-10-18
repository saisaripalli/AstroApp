<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApiCallTest
 *
 * @author sai
 */
class ApiCallTest extends PHPUnit_Framework_TestCase {
    //put your code here
    
    public function testGetData(){
        $apiCalResponse = new ApiCall();
        //$apiName = '/birth_details/';
        //$apiName = '/basic_astro/';
        $apiName = '/horo_chart/';
        $data = array('day' => 12,
                      'month' => 04,
                      'year' => 1984,
                      'hour' => 15,
                      'min' => 05,
                      'lat' => 17.70,
                      'lon' => 83.25,
                      'tzone' => 5.5
                     );
       
        $json = $apiCalResponse ->getData($apiName, $data);
        
        $json_length = count($json);
        
         echo json_encode($json, JSON_PRETTY_PRINT);
        
//        foreach ($json as $x => $x_value) {
//            echo "Key=" . $x . ", Value=" . $x_value;
//            echo "<br>";
//        }
    }
    
}
