
	<?php
		include "letter_frequency_function.php";
		$frequency = array();
		if(isset($_GET["sentence"])){
			$sentence = $_GET["sentence"];
			$frequency = letterFrequency($sentence);
			//print_r($result);
		}
	?>
<html>
	<head>
		<style>
			.colorChange{background-color}
		</style>
	</head>
	<body>
		<form action="freq_character.php" method="get" align="center">
			<table border="1">
				<?php
					if(!empty($frequency)){
						echo "<tr><th>Alphabet</th><th>Number of occurences</th></tr>";
						foreach($frequency as $freq=>$value){
							if($value>5){
								echo "<tr><td>$freq</td><td style=\"background-color:green\">$value</td></tr>";
							}
							else{
								echo "<tr><td>$freq</td><td>$value</td></tr>";
							}
						}
					}
					else{
						echo "Given Sentence: <input type=\"text\" name=\"sentence\">";
					}
				?>
			</table>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>