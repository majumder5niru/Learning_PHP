<?php
	include "stringLength.php";
	class StringLength{
		public $str= "";
		function setLength($string){
			$result = strLength($string);
			$this->str = $result;
			return $this->str;
		}
	}
	$length = new StringLength;
	echo $length->setLength("nirupam");
	
?>