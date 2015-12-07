<html>
	<body>
		<?php
			
			include "response_form.php";
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
			$n = "";
			$e = "";
			$c = "";
			$t = "";
			$m = "";
			$sql = "SELECT * FROM contactform ORDER BY id";
			$result = $conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					//echo $row["name"]."<br>";
					
					$n .=$row["name"]."<br>";
					$e .=$row["email"]."<br>";
					$c .=$row["country"]."<br>";
					$t .=$row["currentTime"]."<br>";
					$m .=$row["message"]."<br>";
				}
				echo '<table border="1">';
				echo"<tr><th width='100'>Name</th><th width='100'>Salary</th><th width='100'>Country</th><th width='100'>Current Time</th><th width='100'>Message</th></tr>"; 
				echo "<tr><td>";
				echo $n;
				echo "</td>";
				echo "<td>";
				echo $e;
				echo "</td>";
				echo "<td>";
				echo $c;
				echo "</td>";
				echo "<td>";
				echo $t;
				echo "</td>";
				echo "<td>";
				echo $m;
				echo "</td>";
				echo "</table>";
			}
			else{
				echo "0 results";
			}
			$conn->close();
			
		?>
		
	</body>
</html>
	
