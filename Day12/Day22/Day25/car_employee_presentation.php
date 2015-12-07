<html>
	<body>
		<?php
			include "car_employee_class_function.php";
			
			$name = $_POST["name"];
			$designation = $_POST["desig"];
			$salary = $_POST["salary"];
			$carname = $_POST['carname'];
			$model = $_POST['model'];
			$db = new ContactBD;
			//$db->insertElement($name,$designation,$salary);
			//$db->insertCarElement($carname,$model);
			$db->insertOptionId('<option value=\"{$row"id"]}\">')
			//echo '<table border="1">';
			//echo"<tr><th width='100'>Name</th><th width='100'>Salary</th><th width='100'>CarName</th><th width='100'>Company</th></tr>"; 
			//$db->employeeTable(3,1);
			//$db->employeeTable(3,2);
			//echo "</table>";
			
		?>
		<?php
		if(isset($_POST['userName'])&& $_POST['userName']!=""){
			
			echo "value set";
			
		}
		
		else{
			echo "Please fill the form";
		}
		
	?>
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
									$db->dropdown();
									//$db->close();
								?>
							</select>
							<br><br>
						Your Car:
						<input type="text" name="carname"/><br><br>
						Model:
						<input type="text" name="model"/>
						<button type="submit">Submit</button>
					</form>
	</body>
</html>