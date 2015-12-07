
<?php
	include "stringLength.php";
	
	function strReverse($str){
		$rev =  "";
		$length= strLength($str);
		for($i=$length;$i>=0;$i--){
			$rev .= $str[$i];
			
		}
		return $rev;
	}
	
?>
		