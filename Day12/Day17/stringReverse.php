<html>
<?php
	include "stringLength.php";
	if(isset($_GET['str'])){
			
			$str = $_GET['str'];
			
			$result = strReverse($str);
			echo $result;
		}
	
	function strReverse($str){
		$rev =  "";
		$length= strLength($str);
		for($i=$length;$i>=0;$i--){
			$rev .= $str[$i];
			
		}
		return $rev;
	}
	
?>
		<form action="stringReverse.php" method="get" align="center">
		Given String: <input type="text" name="str"><br><br>
		
		<button type="submit">Result</button>
		</form>
</html>