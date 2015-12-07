<?php
	$sentence = "Hi how are you hi how you";
	$words = array();
	$word = "";
	$strLength = strlen($sentence);
	for($i=0;$i<$strLength;$i++){
		if($sentence[$i]==" "||$i==$strLength-1){
			if($i==$strLength-1){
				$word = $word.$sentence[$i];
			}
			
				
				array_push($words,$word);
				$word="";
			}
		else{
			$word = $word.$sentence[$i];
			}
			
			
	}
	
	print_r($words);
?>