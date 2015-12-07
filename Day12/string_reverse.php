<?php
	$string = "FTFL!!!";
	$length = strlen($string);
	echo $length."<br>";
	for($i=$length-1;$i>=0;$i--){
		echo $string[$i];
	}
?>