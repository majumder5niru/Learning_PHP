<?php
	$numbers = array(0,9,1,4,-1,10);
	//echo "Length of the array is ".count($numbers)."<br>";
	$max=$numbers[0];
	$length=count($numbers);
	for($i=0;$i<$length;$i++){
		if($max<$numbers[$i]){
			$max=$numbers[$i];
		}
	}
	echo "maximum number is $max";
?>