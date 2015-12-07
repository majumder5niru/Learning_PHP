<html>
	<?php
		if(isset($_GET['number'])){
			$num = $_GET['number'];
			
			$sum = 0;
			$digit = 1;
			while($num--){
				$sum = $sum+$digit;
				$digit = $digit+3;
			}
	echo "Sum of the series is ",$sum;
	
	}
	?>
	<body>
		<form action="sum_with_form.php" method="get" align="center">
		Given Number: <input type="text" name="number"><br><br>
		<button type="submit">Result</button>
		</form>
	</body>
</html>