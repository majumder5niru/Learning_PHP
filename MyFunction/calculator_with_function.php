<html>
	<?php
		if(isset($_GET['fvalue'])&& isset($_GET['lvalue'])&& isset($_GET['operator'])){
			$result = calculator($_GET['fvalue'],$_GET['lvalue'],$_GET['operator']);
			echo $result;
		}
		
		
		function calculator($fvalue,$lvalue,$operator){
			
			
			
			
			if($operator=="+"){
				$result = $fvalue+$lvalue;
				//return $result;
			}
			elseif($operator=="-"){
				$result = $fvalue-$lvalue;
				//return $result;
			}
			elseif($operator=="*"){
				$result = $fvalue*$lvalue;
				
			}
			elseif($operator=="/"&& $_GET['lvalue']!=0){
				$result = $fvalue/$lvalue;
				//return $result;
			}
			
			elseif($lvalue==0 && $operator=="/"){
				
					echo "Last value can not be zero";
			}
			
			else{
				echo "Invalid";
			}
		return $result;
		}
	?>
	<body>
		<form action="calculator_with_function.php" method="get" align="center">
		First Value: <input type="text" name="fvalue"><br><br>
		Last Value :<input type="text" name="lvalue"><br><br>
		Operator   :<input type="text" name="operator"><br><br>
		<button type="submit">Result</button>
		</form>
	</body>
</html>