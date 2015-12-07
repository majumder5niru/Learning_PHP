<?php
	$iteration = 3;
	$sum = 0;
	$digit = 1;
	while($iteration--){
		$sum = $sum+$digit;
		$digit = $digit+3;
	}
	echo "Sum of the series is ",$sum;
	
?>