
	<?php
		
		function myChangeCase($string){
			$strlength = strlen($string);
			$up = "";
			for($i=0;$i<$strlength;$i++){
				if(ord($string[$i])>=ord('a') && ord($string[$i])<=ord('z')){
					$str = chr(ord($string[$i])-ord('a')+ord('A'));
				}
				else{
					$str = $string[$i];
				}
				$up .= $str;
			}
			return $up;
		}
	?>
	