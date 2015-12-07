<?php
	$myPointer = fopen("sentence.txt","r");
	while(!feof($myPointer)){
		echo fgetc($myPointer),"<br>";//for character
		//echo fgetc($myPointer),"<br>";//for line
	}
?>