<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
	<body>

	<?php
		// Set session variables
		$_SESSION["UserName"] = "nirupam";
		echo "Session variables are set. User name is ".$_SESSION["UserName"]."<br>";
	?>
	<a href="session2.php">Next Page</a>
	</body>
</html>