<?php


function calculator(){
	$operand1=0;
	$operand2=10;
	$operator="";
	
	if($operator=="+"){
		$res=$operand1+$operand2;
		echo "$res";
	}
	elseif($operator=="-"){
		echo "Subtraction is".$operand1-$operand2;
	}
	elseif($operator=="*"){
		echo "Multiplication is".$operand1*$operand2;
	}
	elseif($operator=="/" && $operand2!=0){
		echo "Division is".$operand1-$operand2;
	}
	elseif($operand2==0){
		echo "operand2 can not be zero.please input a number.";
	}
	
	else{
		echo "Invalid";
	}
	
}
calculator();
?>