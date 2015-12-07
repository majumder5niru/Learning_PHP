<?php
	$myPOinter = fopen("sentence.txt","w");
	fwrite($myPointer,"I am writing in the file.\n");
	fclose($myPointer);
?>