
<?php
	include "up_to_low.php";
	function dictionary($str1,$str2){
		$dic1 = "";
		$length1 = strlen($str1);
		$length2 = strlen($str2);
		if($length1<=$length2){
			$len = $length1;
		}else{
			$len = $length2;
		}
		for($i=0;$i<$len;$i++){
			if($str1[$i]==$str2[$i]){
				$dic1 .= $str1[$i];
				continue;
			}
			elseif($str1[$i]!=$str2[$i]){
				if($str1[$i]<$str2[$i]){
					return 1;
				}
				else{
					return 2;
				}
			}

		}
		return 1;
	}
?>
	