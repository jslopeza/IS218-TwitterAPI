<?php 

	namespace Classes;
	
	class HtmlPrint implements \Interfaces\HtmlPrint {
		public static function printStatuses(Array $arrays){
			foreach ($arrays as $array) {
				echo $array->text . '<br><br>';
			}
		}

		public static function printFriends($arrays){
			for ($i=0; $i <	count($arrays->ids); $i++) { 
				echo $arrays->ids[$i] . '<br><br>';
			}
		}

		public static function printSuccess($arrays){
			if(!empty($arrays)){
				echo '<h2>Status Successfully posted<h2>';
			}
		}

		public static function printTimeline($arrays){
			foreach($arrays as $array){
				echo $array->text . '<br>';
				echo '<em>' . $array->user->name .'&nbsp;' . $array->created_at . '</em><br><br>';
			}
		}
	}
 ?>