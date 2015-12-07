<?php
	include "C:/xampp/htdocs/xampp/Training/php/myFunction/stringReverseFunction.php";
	class Reverse{
		public $word = "";
		function setReverse($sentence){
			$result = strReverse($sentence);
			$this->word = $result;
			return $this->word;
		}
	}
	$find_reverse = new Reverse;
	$find_reverse->setReverse("nirupam");
	echo $find_reverse->word;
?>