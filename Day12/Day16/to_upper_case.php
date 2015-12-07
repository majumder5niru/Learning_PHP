<html>
	<?php
		include "include_with_-function.php";
		if(isset($_GET['string'])){
			$result = myChangeCase($_GET['string']);
			echo $result;
		}
		
	?>
	<body>
		<form action="to_upper_case.php" method="get" align="center">
		Given String: <input type="text" name="string"><br><br>
		
		<button type="submit">Result</button>
		</form>
	</body>
</html>