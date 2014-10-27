<?php 

namespace Classes;

/**
* 
*/
class TwitterFunctionality {
	
	public static function getField($getfield, $url, $requestMethod){
		$twitter = Credentials::authenticate();
		$twitter->setGetfield($getfield);
		$twitter->buildOauth($url, $requestMethod);
		$response = $twitter->performRequest();
		return json_decode($response);
	}
}

 ?>