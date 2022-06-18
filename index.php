<?php
$curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, 'http://new.leopardscod.com/webservice/getAllCitiesTest/format/json/'); // Write here Test or Production Link
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($curl_handle, CURLOPT_POST, 1);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, json_encode(array(
            'api_key' => 'F0D154D06A20DC357B710E697556011C',
            'api_password' => 'GAMEOVER33',
			'enable_test_mode' => true,   
        )));

        $buffer = curl_exec($curl_handle);
        curl_close($curl_handle);

        print_r($buffer);
		
?>