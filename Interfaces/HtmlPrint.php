<?php 

namespace Interfaces;

interface HtmlPrint{
	public static function printStatuses(Array $arrays);
	public static function printFriends($arrays);
	public static function printSuccess($arrays);
	public static function printTimeline($arrays);
}


 ?>
