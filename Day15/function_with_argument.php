<html>
	<?php
		if(isset($_GET['fvalue'])&&isset($_GET['lvalue'])&&isset($_GET['operator'])){
			$fvalue = $_GET['fvalue'];
			$lvalue = $_GET['lvalue'];
			$operator = $_GET['operator'];
			$result	=	calculator($fvalue,$lvalue,$operator);
			echo $result;
		}
		function calculator($fvalue,$lvalue,$operator){
			
			if($operator=="+"){
			$res = $fvalue+$lvalue;
				return $res;
		}
		elseif($operator=="-"){
			$sub = $fvalue-$lvalue;
				return $sub;
		}
		elseif($operator=="*"){
			$mul = $fvalue*$lvalue;
				return $mul;
		}
		elseif($operator=="/"&& $_GET['lvalue']!=0){
			$div = $fvalue/$lvalue;
				return $div;
		}elseif($lvalue==0 && $operator=="/"){
			
				echo "Last value can not be zero";
		}
		else{
			echo "Invalid";
		}
		
		//calculator();
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