<?php
	include "stringLength.php";
	$arr = array(100,40,1,5,17,50,4);
	$str = implode (" ",$arr);
	$length = strLength($str);
	$min = "";
	for($i=0;$i<$length;$i++){
		if($min > $str[$i]){
			$min = $str[$i];
			
		}
		
	}	
	 echo "minimum value of array is ",$min;
	
?>
	