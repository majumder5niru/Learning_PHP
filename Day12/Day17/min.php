<?php
	$arr = array(100,40,1,5,17,50,4);
	$min = $arr[0];
	foreach($arr as $key => $val){
		if($min > $val){
			$min = $val;
			
		}
		
	}	
	 
	echo "minimum value of array is ", $min;
?>