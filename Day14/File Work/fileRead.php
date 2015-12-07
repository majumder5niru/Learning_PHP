<?php

	include 'functions.php';
	
	$myPointer = fopen("sentence.txt","r");
	$sentence = fread($myPointer,filesize("sentence.txt"));
	
	$words = myExplode($sentence);
	print_r($words);
	$freq = myFreq($words);
	
	echo "<br>";
	echo "<pre>";
	print_r($freq);
	echo "</pre>";
	
	
	
	function myNumber($number)
	{
		return $number + 8;
	}
	
	$offset = myNumber(0);
	echo $offset;
	
	
	
	
	
	
?>