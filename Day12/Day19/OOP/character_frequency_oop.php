<?php
	include "C:/xampp/htdocs/xampp/Training/php/Day18/letter_frequency_function.php";
	class Frequency{
		public $word = "";
		function setFrequency($sentence){
			$result = letterFrequency($sentence);
			$this->word = $result;
			return $this->word;
		}
	}
	$find_frequency = new Frequency;
	$find_frequency->setFrequency("nirupam");
	print_r($find_frequency->word);
?>