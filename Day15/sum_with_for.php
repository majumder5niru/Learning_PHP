<?php
	$n = 1;
	$sum = 0;
	for($i=0;$i<3;$i++){
		$sum = $sum+$n;
		$n = $n+3;
	}
	echo "Summation of the series is ",$sum;
?>