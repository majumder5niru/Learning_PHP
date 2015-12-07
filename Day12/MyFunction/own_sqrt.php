<?php
	$n	=	3;
	$lower = 1;
	$upper= $n;
	while(($upper-$lower)>0.001){
		$mid = ($upper+$lower)/2;
		$midsqr = $mid*$mid;
		if($midsqr>$n){
			$upper = $mid;
		}
		else        {
			$lower $mid;
		}
		echo $mid."<br>";
	}
	
?>\\