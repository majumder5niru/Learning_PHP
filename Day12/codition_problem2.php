<?php
	//code for condition
	$x= -1;
	$arr = array(1,2,3,4);
	//Lazy evaluation.if first cndiition fullfill than another condition don't check
	//without 0 and false anything putted in the condion will print if or it will be true
	if($x=-1){ 
		echo "if";
	}else{
		echo "else";
	}
	echo "<br>";
	echo $x;
?>