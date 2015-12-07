<?php
	include "dictionary.php";
	function sortAscending(array $arr){
		$length = count($arr);
		for($i=0;$i<$length;$i++){
			for($j=$i;$j<$length;$j++){
				$str1 = "";
				$str2 = "";
				if(dictionary($arr[$i],$arr[$j])==1){
						
					$temp = $arr[$i];
					$arr[$i] = $arr[$j];
					$arr[$j] = $temp;

					}
			}
		}
		return $arr;
	}
	$arr = array("bat","ball","cat");
	$result = sortAscending($arr);
	print_r ($result);
?>