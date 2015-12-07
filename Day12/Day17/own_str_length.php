<html>
	<?php
	
		if(isset($_GET['string'])){
			$string = ($_GET['string']);
			$result = strLength($string);
			echo $result;
		}
	
	function strLength($string){
		$i = 0;
		$count = 0;
		while(isset($string[$i])){
			$count = $count+1;
			$i++;
		}
		return $i;
	}
	


?>
	<body>
		<form action="own_str_length.php" method="get" align="center">
		Given String: <input type="text" name="string"><br><br>
		
		<button type="submit">Result</button>
		</form>
	</body>
</html>