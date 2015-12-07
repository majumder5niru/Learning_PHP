<?php
	include "form.php";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "contacts";
	$conn = new mysqli($servername,$username,$password,$db);
	if($conn->connect_error){
		die("connection failed:" .$conn->connect_error);
	}
	echo "Connected Successfully"."<br>";
	
	$name = $_POST["userName"];
	$email = $_POST["email"];
	$country = $_POST["country"];
	$message = $_POST["msg"];
	
	$sql = "INSERT INTO contactform(name,email,country,message) VALUES('$name','$email','$country','$message')";
	if($conn->query($sql)===True){
		echo "New record created successfully ",$conn->insert_id;
	}
	else{
		echo "Error". $sql ."<br>". $conn->error;
	}
	//sql
	
	$sql = "SELECT name FROM contactform WHERE name LIKE '$name'";
	$result = $conn->query($sql);
	echo "<pre>";
	print_r($result);
	echo "</pre>";
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "Welcome ".$row["name"]." I will meet you soon "."<br>";
			
		}
	}
	else{
		echo "0 results";
	}
	
	/*$sql2 = "SELECT name FROM contactform ORDER BY id";
	$result = $conn->query($sql2);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo $row["name"]."<br>";
			
		}
	}
	else{
		echo "0 results";
	}*/
	$conn->close();
	
?>