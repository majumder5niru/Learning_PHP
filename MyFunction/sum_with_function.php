<?php

	

	function summation($i,$digit){
		
		$sum = 0;
		while($i--){
			
			$sum = $sum+$digit;
			$digit = $digit+3;
			
		}
		return $sum;
	}
	$sum =  summation(3,1);
	echo "Summation is ",$sum;
?>