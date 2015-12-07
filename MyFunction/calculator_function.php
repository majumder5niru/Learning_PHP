	<?php
		function calculator($fvalue,$lvalue,$operator){
			$result = "";
			if($operator=="+"){
				$result = $fvalue+$lvalue;
				
			}
			elseif($operator=="-"){
				$result = $fvalue-$lvalue;
				
			}
			elseif($operator=="*"){
				$result = $fvalue*$lvalue;
				
			}
			elseif($operator=="/"&& $_GET['lvalue']!=0){
				$result = $fvalue/$lvalue;
				
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
	