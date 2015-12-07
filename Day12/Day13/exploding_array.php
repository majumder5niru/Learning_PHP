<?php
	$sentence="i am dissapointed and i think my depression will never over";
	$words = explode(" ",$sentence);
	//print_r ($words);
	
	/*$aa = array("ken"=>"Developer","Ban"=>"Manager");
	$aa["gen"] = "tester"; 
	//echo $aa["gen"];
	//array_key_exists can be used instead of isset here
	 if(isset($aa["den"])){
		 echo "den is present";
	 }
	 else{
		 echo "den is not a key in this array";
	 }*/
	 $frequency=array();
	 $wordCount=count($words);
	 for($i=0;$i<$wordCount;$i++){
		 if(array_key_exists($words[$i],$frequency)){
			 $frequency[$words[$i]]++;
		 }else{
			 $frequency[$words[$i]]=1;
		 }
	 }
	 print_r($frequency);
?>