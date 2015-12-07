<html>
	<?php
		if(isset($_GET['string1'])&& isset($_GET['string2'])){
			$string1 = $_GET['string1'];
			$string2 = $_GET['string2'];
			if($string1==$string2){
				echo "strings are same";
			}else{
				echo "strings are not same";
			}
		}
	?>
	<body>
		<form action="comparing_string.php" method="get" align="center">
		First Value: <input type="text" name="string1"><br><br>
		Last Value :<input type="text" name="string2"><br><br>
		<button type="submit">Result</button>
		</form>
	</body>
</html>