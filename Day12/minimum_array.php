<html>
	<?php
	if(isset($_GET['arr'])){
			$arrays = array();
			$arrays[] = $_GET['arr'];
			
			$result = minArray($arrays);
			echo implode("",$result);
		}
	//$arr = array(100,40,1,5,17,50,4);
	function minArray($arr){
		$min = $arr[0];
		foreach($arr as $key => $val){
			if($min > $val){
				$min = $val;
				
			}
			
		}
			return $min;
	}
	 
	//print $min;
?>
	<form action="minimum_array.php" method="get" align="center">
		Given String: <input type="text" name="arr[]"><br><br>
		
		<button type="submit">Result</button>
		</form>
</html>