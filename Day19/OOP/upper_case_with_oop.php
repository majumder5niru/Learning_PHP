<?php
	include "own_lower_to_upper_function.php";
	class upper{
		public $str= "";
		function setUpperCase($string){
			$result = myChangeCase($string);
			$this->str = $result;
			return $this->str;
		}
	}
	$upperCase = new upper;
	echo $upperCase->setUpperCase("nirupam");
	
?>