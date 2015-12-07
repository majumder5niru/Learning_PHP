<?php
	$numbers = array(2,-4,6,1,4);
	$length = count($numbers);
	for($i=0;$i<$length;$i++){
		for($j=$i;$j<$length;$j++){
			if($numbers[$i]>$numbers[$j]){
				$temp = $numbers[$i];
				$numbers[$i]=$numbers[$j];
				$numbers[$j]=$temp;
			}
		}
	}
	echo "Ascending Order is "."<br>";
	print_r($numbers);
?>