<html>
	<?php
		if(isset($_GET['string'])){
			$string = $_GET['string'];
			$result = myChangeCase($string);
			echo $result;
		}
		function myChangeCase($string){
			$strlength = strlen($string);
			$up = "";
			
			for($i=0;$i<$strlength;$i++){
				if(ord($string[$i])>=ord('A') && ord($string[$i])<=ord('Z')){
					
					$str = chr(ord($string[$i])+ord('a')-ord('A'));
					
				}else{
					
					$str = $string[$i];
				}
				$up .= $str; 
			}
			return $up;
		}
		
	?>
	<body>
		<form action="upper_to_lower_with_function.php" method="get" align="center">
		Given String: <input type="text" name="string"><br><br>
		
		<button type="submit">Result</button>
		</form>
	</body>
</html>