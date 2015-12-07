<?php
	include "throw_message.php";
	include "new_form.php";
	$name = $_POST['userName'];
	$email = $_POST['email'];
	$country = $_POST['country'];
	$message = $_POST['msg'];
	$cdb = new Contact;
	$cdb->insertElement($name,$email,$country,$message);
	
	$cdb->selectAll('contactform');
	$cdb->close();
?>