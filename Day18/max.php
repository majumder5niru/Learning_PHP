<?php
	$arr = array(100,40,1,5,17,50,4);
	$max = $arr[0];
	foreach($arr as $key => $val){
		if($max < $val){
			$max = $val;
			
		}
		
	}	
	 
	echo "minimum value of array is ", $max;
?>