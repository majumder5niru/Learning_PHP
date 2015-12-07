<?php
	class Contact{
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
		public function insertElement($name,$email,$country,$message){
			$sql = "INSERT INTO contactform(name,email,country,message) VALUES('$name','$email','$country','$message')";
			if($this->conn->query($sql)===True){
			echo "New record created successfully ",$this->conn->insert_id;
			}
			else{
				echo "Error". $sql ."<br>". $conn->error;
			}
			return $sql;
		}
		public function selectAll($table){
			$sql = "SELECT * FROM contactform ORDER BY id";
			$result = $this->conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					echo "<tr><td>";
					echo $row["name"];
					echo "</td>";
					echo "<td>";
					echo $row["email"];
					echo "</td>";
					echo "<td>";
					echo $row["country"];
					echo "</td>";
					echo "<td>";
					echo $row["message"];
					echo "</td>";
					echo "<td>";
					echo $row["currentTime"];
					echo "</td>";
					echo "</tr>";
					
				}
		}
			else{
				echo "0 results";
			}
			
		}
		
	}
?>