<html>
<head>
    
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
  </head>
</head>
<?php
	if(isset($_POST['username'])&& $_POST['username']!="" || isset($_POST['password']) && $_POST['password']!=""){
		$userName = $_POST['userName'];
		$password = $_POST['password'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$dob = $_POST['dob'];
	}
	else{
		echo "Please fill the form"."<br/>";
		echo "Username and password can not be empty";
	}
	
?>
	<body>
		<form action="registration.php" method="post">
			User Name		:<input type="text" name="userName"/><br/><br/>
			Password 		:<input type="password" name="password"/><br/><br/>
			First Name		:<input type="text" name="firstName"/><br/><br/>
			Last Name		:<input type="text" name="lastName"/><br/><br/>
			Date of Birth	:<input type="text" name="dob"/><br/><br/>
			<button type="submit">Submit</button>			 
		</form>
	</body>
</html>