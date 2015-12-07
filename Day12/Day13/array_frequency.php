<?php
	$sentence = "how beautifully i understand the code!! but my thinking never work:( Even i can't implement my logic:()";
	$words = explode(" ",$sentence);
	$frequency = array();
	$wordCount = count($words);
	for($i=0;$i<$wordCount;$i++){
		//cheking if may key is exist
		if(array_key_exists($words[$i],$frequency)){
			$frequency[$words[$i]]++;
		}
		else{
			$frequency[$words[$i]] = 1;
		}
	}
	print_r($frequency);
?>