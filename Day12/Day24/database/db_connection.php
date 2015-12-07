<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "contacts";
	$conn = new mysqli($servername,$username,$password,$db);
	if($conn->connect_error){
		die("connection failed:" .$conn->connect_error);
	}
	echo "Connected Successfully"."<br>";
	//insert table element
	$sql = "INSERT INTO personinfo(name,email,country,phoneNumber) VALUES('GOOGLE','g@gmail.com','USA','01928301848')";
	if($conn->query($sql)===True){
		echo "New record created successfully ",$conn->insert_id;
	}
	else{
		echo "Error". $sql ."<br>". $conn->error;
	}
	//sql
	
	$sql = "SELECT * FROM personinfo";
	$result = $conn->query($sql);
	echo "<pre>";
	print_r($result);
	echo "</pre>";
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "id:".$row["id"]."_Name:".$row["name"]."<br>";
		}
	}
	else{
		echo "0 results";
	}
	$conn->close();
?>