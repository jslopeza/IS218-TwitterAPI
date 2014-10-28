<?php 

	namespace Interfaces;

	interface TwitterFunctionality{
		public static function getField($getfield, $url, $requestMethod);
		public static function postField($postfield, $url, $requestMethod);
	}


 ?>