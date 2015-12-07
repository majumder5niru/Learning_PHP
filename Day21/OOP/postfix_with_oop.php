<html>
	<?php
		include "C:/xampp/htdocs/xampp/Training/php/MyFunction/only_explode_function.php";
		include "C:/xampp/htdocs/xampp/Training/php/Day20/OOP/stack_oop.php";
		include "C:/xampp/htdocs/xampp/Training/php/MyFunction/calculator_function.php";
		
		
		if(isset($_GET['string'])){
			$expression = ($_GET['string']);
			//$result = strLength($string);
			//echo $result;
		
	
			//$expression = "3 4 6 * -";
			$expArr = myExplode($expression);
			//print_r($expArr);
			$myStack = new Stack;
			foreach($expArr as $op){
				$temp = intval($op);
				//echo $temp;
				if($temp){
					$myStack->push($temp);
				}
				else{
					$op2 = $myStack->pop();
					$op1 = $myStack->pop();
					$result = calculator($op1,$op2,$op);
					//echo $result;
					$myStack->push($result);
				}
			}
			echo "My result is ",$myStack->pop();
		}
	?>
	<body>
		<form action="postfix_with_oop.php" method="get" align="center">
		Given Value: <input type="text" name="string"><br><br>
		
		<button type="submit">Result</button>
		</form>
	</body>
</html>