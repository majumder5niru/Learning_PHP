<html>
<head>
	<style>
		.error{
			border-style: solid;
			border-color: red;
		}
		.red{
			border-style: solid;
			border-color: red;
		}
		.success{
			border-style: solid;
			border-color: red;
		}
	</style>
</head>
<?php
	$name = "";
	$email = "";
	$boxstyle="";
	$textstyle="";
	if(isset($_GET['userName'])){
		$name=$_GET['userName'];
		$email=$_GET['emailId'];
	}
	else{
		$boxstyle="red";
		$textstyle="red";
	}
?>
<body>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
	<span class= <?php echo $textstyle;?>Name*:</span>
  <input type="text" name="userName" value="<?php echo $name;?>"/>
  <br>
  E-mail ID:
  <input type="text" name="emailId"/>
  <br><br>
  <button type="submit">Submit</button>
</form>
</body>
</html>