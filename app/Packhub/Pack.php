<?php

namespace App\PackHub;

class Pack{

    //Create PackHub token variable

    private $packToken = 'tkWIVMEr3bo9YrrCn6vO73cVKa71GbhC1Q3zehOc';

    //Create PackHub url

    private $PackHubUrl = 'https://api.packt.com/';

    /***
	 * Function Name: getAPI
	 * Description: To get packhub api using the api documentation 
	 * params: $link
	 * return: return response from rest api according to the link provided
	 * Created On: 30-Nov 2021
	 */

    public function getAPI($link,$image_type = 0)
	{

		$apiUrl = $this->PackHubUrl.$link;
        	
		$headers = array(
	        sprintf('Authorization: Bearer %s', $this->packToken),
	    );
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $apiUrl);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	    $result = curl_exec($ch);
        $response = json_decode($result);
	    
       
        
		curl_close($ch);
        
        return $response;
		
	}
}