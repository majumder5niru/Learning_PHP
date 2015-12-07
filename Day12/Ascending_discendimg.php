<?php
	$numbers = array(8,2,4,0,-3);
	$length = count($numbers);
	echo "length is ".$length."<br>";
	
	for($j=0;$j<$length;$j++){
		for($i=0;$j<$length;$i++){
		if($numbers[$i+1]<$numbers[$i]){
			$temp=$numbers[$i];
			$numbers[$i]=$numbers[$i+1];
			$numbers[$i+1]=$temp;
		}
		}
	}
	echo "Ascending order is: "."<br>";
	for($i=0;$i<$length;$i++)
	{
		echo $numbers[$i];
	}
	
	
?>