<html>

	<head>
    
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
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
				<form action="car_employee_presentation.php" method="post">
						 
						Name:
							<input type="text" name="name"/>
								<br><br>
					
						Designation:
							<input type="text" name="desig"/>
								<br><br>
						Salary:
							<input type="text" name="salary"/>
								<br><br>
						Car Name:
							<select name="car">
								<?php
									$db->
								?>
							</select>
							<button type="submit">Submit</button>
					</form>
					
					

					
				</div>
				<div class="col-md-4"></div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</body>
</html>