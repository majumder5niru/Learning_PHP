<html>
<head>
<head>
    
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
  </head>
</head>
<?php
	if(isset($_POST['userName'])&& $_POST['userName']!=""){
		
		//echo "Welcome ", ($_POST["userName"]),"<br>";
		//echo "Your email ID is : ", $_POST["emailId"],"<br>";
		//echo "Your contact no. is : ", $_POST["contact"],"<br>";
		//echo "Your country name is : ", $_POST["country"],"<br>";
		
	}
	
	else{
		echo "Please fill the form";
	}
	
?>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<form action="connect_with_form.php" method="post">
						 Name:
							<input type="text" name="userName"/>
								<br><br>
						E-mail ID:
							<input type="text" name="email"/>
								<br><br>
					
						Country Name:
							<input type="text" name="country"/>
								<br><br>
						Message:
							<input type="text" name="msg"/>
								<br><br>
							<button type="submit">Submit</button>
					</form>
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</body>
</html>