<?php
	include "upper_to_lower_function.php";
	class upperToLower{
		public $str= "";
		function setUpperCase($string){
			$result = myChangeCase($string);
			$this->str = $result;
			return $this->str;
		}
	}
	$lowerCase = new upperToLower;
	echo $lowerCase->setUpperCase("NIRUPAM");
	
?>