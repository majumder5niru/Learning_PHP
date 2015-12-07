<?php
	session_start();
	//setcookie('user_name', '')
	//$_SESSION["error"]="You are not permitted to eneter in page c";
	if(!isset($_SESSION['username']) && !isset($_COOKIE['username'])){
		header("Location: a.php");
		
	}
	if(isset($_GET['logout'])){
		session_unset();
		session_destroy();
		setcookie('username','',time()-3600);
		header("Location: a.php");
	}
	
?>
<html>
	<form action="c.php" method="get">
	
	<button type="submit" name="logout" value="logout">Log Out</button>
		
	</form>
</html>