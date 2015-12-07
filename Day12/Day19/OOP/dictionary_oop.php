<?php
	include "dictionary_function.php";
	class dictionary{
		public $str1 = "";
		public $str2 = "";
		function setDic($str1,$str2){
			$result = dictionary($str1,$str2);
			$this->str1 = $str1;
			$this->str2 = $str2;
			return $result;
			
		}
	}
	$dicshow = new dictionary;
	echo $dicshow->setDic("def","abc");
	
?>