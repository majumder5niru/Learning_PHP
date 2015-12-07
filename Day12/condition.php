<?php
	//code for condition
	$x= -1;
	$arr = array(1,2,3,4);
	//Lazy evaluation.if first cndiition fullfill than another condition don't check
	if($x>0 && $arr[$x]==2){ 
		echo "if";
	}else{
		echo "else";
	}
	
?>