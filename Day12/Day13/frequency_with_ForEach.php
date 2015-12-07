<?php
$sentence="i am dissapointed and i think my depression will never over";
	$words = explode(" ",$sentence);
	 $frequency=array();
	 $wordCount=count($words);
	  foreach($words as $word){
		 if(array_key_exists($word,$frequency)){
			 $frequency[$word]++;
		 }else{
			 $frequency[$word]=1;
		 }
	 }
	// print_r($frequency);
	 foreach($frequency as $key=>$value){
		 echo "$key=>$value";
	 }
?>