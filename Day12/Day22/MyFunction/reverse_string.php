<html>
	<?php
		if(isset($_GET['string'])){
			$string = $_GET['string'];
			$strlength = strlen($string);
			for($i=$strlength-1;$i>=0;$i--){
				echo $string[$i];
			}
		}
	?>
	<body>
		<form action="reverse_string.php" method="get" align="center">
		Given String: <input type="text" name="string"><br><br>
		<button type="submit">Result</button>
		</form>
	</body>
</html>