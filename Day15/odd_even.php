<html>
	<?php
		if(isset($_GET['number'])){
			$num="";
			
				$num = $_GET['number'];
				if($num%2==0){
					echo "Given number is Even";
				}else{
					echo "Given number is odd";
			}
			
			
		}
	?>
	<body>
		<form action="odd_even.php" method="get" align="center">
		Given Number: <input type="text" name="number"><br><br>
		<button type="submit">Result</button>
		</form>
	</body>
</html>