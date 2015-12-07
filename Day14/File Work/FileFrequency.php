<?php

 include 'using_include.php';
 
 $myPointer = fopen("sentence1.txt","r");
 $sentence  = fread($myPointer,filesize("sentence1.txt"));
 
 $words = myExplode($sentence);
 print_r($words);
 echo "<br>";
 
		
	$frequency = myFreq($words);
	print_r($frequency);
	
	$myPointer1 = fopen("sentence2.txt","w");
	
	
	foreach($frequency as $key => $value)
	 {
		// echo "$key => $value","<br>";
		 fwrite($myPointer1,"$key => $value");
	}
	 ?>