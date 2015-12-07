<?php
	echo "<h1>Welcome to php!!</h1>";
	$x=10;
	function scope(){
		//global $x;
		$x = 90;
		echo "value of x inside is", $x."<br>";
	}
	function sample(){
		//global $x;
		$x=100;
	echo "value of x inside sample is", $x."<br>";
	}
	scope();
	sample();
	echo "value of x outside is", $x;
?>