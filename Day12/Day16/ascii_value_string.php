<html>
	<?php
		if(isset($_GET['string'])){
			$string = $_GET['string'];
			$strlength = strlen($string);
			for($i=0;$i<$strlength;$i++){
				echo ord($string[$i])."<br>";
				
			}
		}
	?>
	<body>
		<form action="ascii_value_string.php" method="get" align="center">
		Given String: <input type="text" name="string"><br><br>
		
		<button type="submit">Result</button>
		</form>
	</body>
</html>