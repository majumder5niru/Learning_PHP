<?php
	function letterFrequency($sentence){
		$length = strlen($sentence);
		$frequency = array();
		for($i=0;$i<$length;$i++){
			if(array_key_exists($sentence[$i],$frequency)){
				$frequency[$sentence[$i]]++;
			}
			else{
				$frequency[$sentence[$i]] = 1;
			}
		}
		return $frequency;
	}
?>