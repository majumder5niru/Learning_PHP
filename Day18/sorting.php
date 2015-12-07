<?php
	$numbers = array(8,2,4,0,-3);
	$length = count($numbers);
	echo "length is ".$length."<br>";
	
	for($i=0;$i<$length;$i++){
		for($j=$i;$j<$length;$j++){
		if($numbers[$i]>$numbers[$j]){
			$temp=$numbers[$i];
			$numbers[$i]=$numbers[$j];
			$numbers[$j]=$temp;
		}
		}
	}
	echo "Ascending order is: "."<br>";
	print_r($numbers);
	echo "<br>";
	
	for($i=0;$i<$length;$i++){
		for($j=$i;$j<$length;$j++){
		if($numbers[$i]<$numbers[$j]){
			$temp=$numbers[$i];
			$numbers[$i]=$numbers[$j];
			$numbers[$j]=$temp;
		}
		}
	}
	echo "Discending order is: "."<br>";
	print_r($numbers);
	
?>