<?php
	function My_in_Array($wt,$nA){
		/*$len = count($arr);
		for($i=0;$i<$len;$i++){
			if($arr[$i]==$wt){
				return true;
			}
		}
		return false;*/
		foreach($nA as $eachElement){
			if($wt==$eachElement){
				return true;
			}
		}
		return false;
	}
?>