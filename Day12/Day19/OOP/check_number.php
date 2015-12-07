<html>
	<?php
		//include "stringLength.php";
		if(isset($_GET['number'])){
			$phoneNumber = ($_GET['number']);
			$isNumber = isBdphoneNumber($phoneNumber);
			echo $isNumber;
		}
	
	function isBdphoneNumber($phoneNumber){
		$length = strlen($phoneNumber);
		
		
			if($length==11){
				for($i=0;$i<$length;$i++){
					if($phoneNumber[$i]>'0'||$phoneNumber[$i]<'9'){
						return false;
					}
					return true;
				}
			}
			else{
				return false;
			}
		}
	


?>
	<body>
		<form action="check_number.php" method="get" align="center">
		Given Number: <input type="text" name="number"><br><br>
		
		<button type="submit">Result</button>
		</form>
	</body>
</html>