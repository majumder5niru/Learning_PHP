<?php
	include "own_class_function.php";
	$cdb = new Contact;
	$cdb->insertElement("nirupam","niru.cste@gmail.com","Australia","Discovering");
	echo '<table border="2">';
	echo"<tr><th width='100'>Name</th><th width='100'>Email</th><th width='100'>Country</th><th width='100'>Message</th><th width='100'>Current Time</th></tr>"; 
	$cdb->selectAll('contactform');
	echo "</table>";
?>