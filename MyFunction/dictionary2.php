<html>
<?php
	include "up_to_low.php";
	if(isset($_GET['string1']) && isset($_GET['string2'])){
		$string1 = $_GET['string1'];
		$string2 = $_GET['string2'];
		$str1 = myChangeCase($string1);
		$str2 = myChangeCase($string2);
		
		$result = dictionary($str1,$str2);
		echo $result;
		}
	function dictionary($str1,$str2){
		$dic = "";
		$length1 = strlen($str1);
		$length2 = strlen($str2);
		if($length1<=$length2){
			$len = $length1;
		}else{
			$len = $length2;
		}
		for($i=0;$i<$len;$i++){
			if($str1[$i]==$str2[$i]){
				$dic .= $str1[$i];
				continue;
			}
			elseif($str1[$i]!=$str2[$i]){
				if($str1[$i]<$str2[$i]){
					return $str1;
				}
				else{
					return $str2;
				}
			}

		}
		return $dic;
	}
?>
	<body>
		<form action="dictionary2.php" method="get" align="center">
		String1: <input type="text" name="string1"><br><br>
		String2: <input type="text" name="string2"><br><br>
		<button type="submit">Result</button>
		</form>
	</body>
</html>