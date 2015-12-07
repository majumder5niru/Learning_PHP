<html>
<?php
	include "own_in_array.php";
	if(isset($_GET['string1']) && isset($_GET['string2'])){
			$string1 = $_GET['string1'];
			$string2 =  $_GET['string2'];
		
			$length1 = strlen($string1);
			$length2 = strlen($string2);
			$arr = "";
			$nA = array();
			if($length1!=$length2){
				echo "Number of charcters should be same";
			}
			else{
				$legth1 = $length2;
			}
			
			for($i=0;$i<$length1;$i++){
				for($j=0;$j<$length1;$j++){
					if($string1[$i]==$string2[$j]){
						if(My_in_array($j,$nA)){
							continue;
						}
						else{
							array_push($nA,$j);
						}
						$arr .= $string2[$j];
						break;
						
					}
					else{
						
						continue;
					}
					
				}
			}
			if($arr==$string1||$arr==$string2){
				echo "True";
			}
			else{
				echo "False";
			}
		}
?>
	<body>
		<form>
			<form action="anargam.php" method="get" align="center">
			String1: <input type="text" name="string1"><br><br>
			String2: <input type="text" name="string2"><br><br>
		<button type="submit">Result</button>
		</form>
		</form>
	</body>
</html>