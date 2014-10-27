<?php 

	namespace Classes;
	
	class HtmlPrint {
		public static function printStatuses(Array $arrays){
			foreach ($arrays as $array) {
				//print_r($array);
				echo $array->text . '<br><br>';
			}
		}

		public static function printFriends($arrays){
			for ($i=0; $i <	count($arrays->ids); $i++) { 
				echo $arrays->ids[$i] . '<br><br>';
			}
		}
	}
 ?>