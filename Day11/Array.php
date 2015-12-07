<?php
	
	$x=array(1,"h el lo world",4);
	//working with string now
	$count=strlen($x);
	echo "kl",$count;
	$count1=str_word_count($x[1]);
	return $count1;
	echo "value at index 1 is $x[1]and function value is $count"."<br>";
	echo "value at index 1 is $x[1]and function value is $count1"."<br>";
	// this code is for array
	echo "value at index 0 is $x[0]"."<br>";
	echo "value at index 1 is $x[1]"."<br>";
	echo "value at index 2 is $x[2]"."<br>";
?>