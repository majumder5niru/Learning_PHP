<?php
	
	function sample(){
		global $x; //It will be initiated only once
		//$x = 0;
		$x = $x + 1;
	echo "value of x inside sample is", $x."<br>";
	}
	sample();
	sample();
	sample();
	echo "value of x outside sample is", var_dump($x)."<br>";
?>