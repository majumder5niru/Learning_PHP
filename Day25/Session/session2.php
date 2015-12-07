
<?php
	session_start();
	session_destroy(); 
	//session_unset(); 
	echo "Session variables are set. User name is ".$_SESSION["UserName"]."<br>";
?>
<html>
	<body>
		<a href="session3.php">Next Page</a>
	</body>
</html>