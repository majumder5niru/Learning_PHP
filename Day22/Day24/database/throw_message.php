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
			echo "New record created successfully ",$this->conn->insert_id."<br>";
			}
			else{
				echo "Error". $sql ."<br>". $conn->error;
			}
			return $sql;
		}
		public function selectAll($table){
			$sql = "SELECT name FROM contactform";
			$result = $this->conn->query($sql);
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					
					//echo "Welcome ".$row["name"]." I will meet you soon "."<br>";
					$new_name = $row["name"];
					
				}
				echo "Welcome ".$new_name." I will meet you soon "."<br>";
				
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