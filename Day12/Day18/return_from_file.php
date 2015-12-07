<?php
	
	function myFileRead($string){
		$myPointer = fopen("text.txt","r");
		
		return fgets($myPointer);
	}
	echo MyFileRead('text.txt');
?>