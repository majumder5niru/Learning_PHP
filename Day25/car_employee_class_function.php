		<?php
			class ContactBD{
				public $conn;
				public function __construct(){
					$servername = "localhost";
					$username = "root";
					$password = "";
					$db = "contacts";
					$this->conn = new mysqli($servername,$username,$password,$db);
					if($this->conn->connect_error){
						die("connection failed:" .$this->conn->connect_error);
					}
					echo "Connected Successfully"."<br>";
				}
				public function insertElement($name,$designation,$salary){
					$sql = "INSERT INTO employee(name,designation,salary) VALUES('$name','$designation','$salary')";
					if($this->conn->query($sql)===True){
					echo "New record created successfully ",$this->conn->insert_id."<br>";
					}
					else{
						echo "Error". $sql ."<br>". $this->conn->error;
					}
					return $sql;
				}
				public function insertCarElement($carname,$model){
					$sql = "INSERT INTO cardetails(carname,model) VALUES('$carname','$model')";
					if($this->conn->query($sql)===True){
					echo "New record created successfully ",$this->conn->insert_id."<br>";
					}
					else{
						echo "Error". $sql ."<br>". $this->conn->error;
					}
					return $sql;
				}
				
				public function insertOptionId($carname){
					$sql = "INSERT INTO cardetails(carname) VALUES('$carname')";
					if($this->conn->query($sql)===True){
					echo "New record created successfully ",$this->conn->insert_id."<br>";
					}
					else{
						echo "Error". $sql ."<br>". $this->conn->error;
					}
					return $sql;
				}
				
				public function dropdown(){
					$sql = "SELECT * FROM cardetails ";
					$result = $this->conn->query($sql);
					if($result->num_rows>0 ){
						while($row = $result->fetch_assoc() ){
							echo "<option value=\"{$row['id']}\">{$row['carname']}</option>"."<br>";
						}
					}
					else{
						echo "0 results";
					}
				}
				public function employeeTable($eId,$cId){
					$sql1 = "SELECT name,salary FROM employee WHERE id LIKE '$eId'";
					$result1 = $this->conn->query($sql1);
					$sql2 = "SELECT carname,company FROM cardetails WHERE id LIKE '$cId'";
					$result2 = $this->conn->query($sql2);
					if($result1->num_rows>0 && $result2->num_rows>0 ){
						while(($row1 = $result1->fetch_assoc()) && ($row2 = $result2->fetch_assoc())){
							echo "<tr><td width='100'>";
							echo $row1["name"];
							echo "</td>";
							echo "<td width='100'>";
							echo $row1["salary"];
							echo "</td>";
							echo "<td width='100'>";
							echo $row2["carname"];
							echo "</td>";
							echo "<td width='100'>";
							echo $row2["company"];
							echo "</td>";
							echo "</tr>";
							//echo "Welcome ".$row["name"]."<br>";
							//echo "Welcome ".$row["salary"]."<br>";
						}
					}
					else{
						echo "0 results";
					}
				}
				public function close(){
					$this->conn->close();
				}
			}
		?>
	

