<html>
	<?php
		if(isset($_GET['fvalue'])&&isset($_GET['lvalue'])&&isset($_GET['operator'])){
		$fvalue = $_GET['fvalue'];
		$lvalue = $_GET['lvalue'];
		$operator = $_GET['operator'];
		
		if($operator=="+"){
			$addition = $fvalue+$lvalue;
				echo $addition;
		}
		elseif($operator=="-"){
			$sub = $fvalue-$lvalue;
				echo $sub;
		}
		elseif($operator=="*"){
			$mul = $fvalue*$lvalue;
				echo $mul;
		}
		elseif($operator=="/"&& $_GET['lvalue']!=0){
			$div = $fvalue/$lvalue;
				echo $div;
		}elseif($lvalue==0 && $operator=="/"){
			
				echo "Last value can not be zero";
		}
		else{
			echo "Invalid";
		}
		}
	?>
	<body>
		<form action="addition.php" method="get" align="center">
		First Value: <input type="text" name="fvalue"><br><br>
		Last Value :<input type="text" name="lvalue"><br><br>
		Operator   :<input type="text" name="operator"><br><br>
		<button type="submit">Result</button>
		</form>
	</body>
</html>