<?php 

namespace Classes;

/**
* 
*/
class TwitterFunctionality implements \Interfaces\TwitterFunctionality {
	
	public static function getField($getfield, $url, $requestMethod){
		$twitter = Credentials::authenticate();
		$twitter->setGetfield($getfield);
		$twitter->buildOauth($url, $requestMethod);
		$response = $twitter->performRequest();
		return json_decode($response);
	}

	public static function postField($postfield, $url, $requestMethod){
		$twitter = Credentials::authenticate();
		$twitter->setPostfields($postfield);
		$twitter->buildOauth($url, $requestMethod);
		$response = $twitter->performRequest();
		return json_decode($response);
	}
}

 ?>