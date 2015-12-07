<?php
	function sortAscending(array $arr){
		$length = count($arr);
		for($i=0;$i<$length;$i++){
			for($j=$i;$j<$length;$j++){
				if($arr[$i]>$arr[$j]){
					$temp = $arr[$i];
					$arr[$i] = $arr[$j];
					$arr[$j] = $temp;
				}
			}
		}
		return $arr;
	}
	$arr = array(12,343,-5,53,3);
	$result = sortAscending($arr);
	print_r ($result);
	echo "<br>";
	//discending code
	function sortDiscending(array $arr){
		$length = count($arr);
		for($i=0;$i<$length;$i++){
			for($j=$i;$j<$length;$j++){
				if($arr[$i]<$arr[$j]){
					$temp = $arr[$i];
					$arr[$i] = $arr[$j];
					$arr[$j] = $temp;
				}
			}
		}
		return $arr;
	}
	//$arr = array(12,343,-5,53,3);
	$result = sortDiscending($arr);
	print_r ($result);
?>