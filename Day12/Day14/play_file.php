<?php
	//$myPointer = fopen("sentence.txt","r");//it will only open..dont write
	//$myPointer = fopen("sentence.txt","w");//it is permitted to read and write.writting something will replace the previous thing
	//$myPointer = fopen("sentence.txt","a+");//it is permitted to append at the last of the line
	//echo fgets($myPointer);//for reading one line
	//fclose($myPointer);
	//echo fgets($myPointer);
	//fclose($myPointer);
	//echo fgets($myPointer);
	//$string = fgets($myPointer);//for printing character
	//echo $string[0]." ".$string[1];
	//fwrite($myPointer,"I am writing in the file.\n");
	//$myPointer = fopen("sentence.txt","w");
	//fwrite($myPointer,"I am writing in the file.\n");
	//fclose($myPointer);
	//$myPointer = fopen("sentence.txt","w");
	//fwrite($myPointer,"I am writing in the file.\n");
	//fclose($myPointer);
	//fwrite($myPointer,"I am writing in the file.");
	//echo fread($myPointer,filesize("sentence.txt"));
	$myPointer = fopen("sentence.txt","a");
	fwrite($myPointer,"I am writing in the file1.\n");
	fwrite($myPointer,"I am writing in the file2.\n");
	fclose($myPointer);
	
	$myPointer = fopen("sentence.txt","a");
	fwrite($myPointer,"I am writing in the file3.\n");
	fwrite($myPointer,"I am writing in the file4.\n");
	fclose($myPointer);
	
	$myPointer = fopen("sentence.txt","r");
	//fwrite($myPointer,"I am writing in the file.");
	//fwrite($myPointer,"I am writing in the file.");
	echo fgets($myPointer);
	echo fgets($myPointer);
	fclose($myPointer);
?>