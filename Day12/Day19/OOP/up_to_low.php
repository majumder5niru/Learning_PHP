
	<?php
		
		function myChangeCase($string){
			$strlength = strlen($string);
			$up = "";
			
			for($i=0;$i<$strlength;$i++){
				if(ord($string[$i])>=ord('A') && ord($string[$i])<=ord('Z')){
					
					$str = chr(ord($string[$i])+ord('a')-ord('A'));
					
				}else{
					
					$str = $string[$i];
				}
				$up .= $str; 
			}
			return $up;
		}
		
	?>
	