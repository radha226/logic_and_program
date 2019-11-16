<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
   public function showText(){
   	$curl = curl_init();
	curl_setopt_array($curl, array(
	    CURLOPT_URL => "https://reqres.in/api/users?page=2",
	    CURLOPT_RETURNTRANSFER => true,
	    CURLOPT_ENCODING => "",
	    CURLOPT_TIMEOUT => 30000,
	    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	    CURLOPT_CUSTOMREQUEST => "GET",
	    CURLOPT_HTTPHEADER => array(
	    	// Set Here Your Requesred Headers
	        'Content-Type: application/json',
	    ),
	));
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);

	if ($err) {
	    echo "cURL Error #:" . $err;
	} else {
	    print_r(json_decode($response));
	    return view('about', [$response]);
	}
     
    }
}
