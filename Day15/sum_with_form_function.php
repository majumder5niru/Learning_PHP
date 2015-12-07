<html>
	<?php
		if(isset($_GET['value'])){
			$sum = series($_GET['value'],$_GET['iter']);
			echo "Summation is ",$sum;
		}
		function series($value,$iter){
			$sum = 0;
			while($iter--){
				$sum = $sum+$value;
				$value= $value+3;
			}
			return $sum;
		}
	?>
	<body>
		<form action="sum_with_form_function.php" method="get" align="center">
		Starting Value: <input type="text" name="value"><br><br>
		Iteration  : <input type="text" name="iter"><br><br>
		<button type="submit">Result</button>
		</form>
	</body>
</html>