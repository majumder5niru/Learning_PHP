
<?php
	include "own_str_length.php";
	$str = "Hello FTFL";
	$length= strLength($str);
	for($i=$length;$i>=0;$i--){
		echo $str[$i];
	}
	
?>
