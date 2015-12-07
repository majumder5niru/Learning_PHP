<?php
	function strLength($string){
		$i = 0;
		$count = 0;
		while(isset($string[$i])){
			$count = $count+1;
			$i++;
		}
		return $i;
	}
?>