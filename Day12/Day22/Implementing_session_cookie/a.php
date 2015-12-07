<?php
	session_start();
	if(isset($_SESSION['username'])||isset($_COOKIE['username'])){
		header("Location: b.php");
	}
	if(isset($_GET['username'])){
		$_SESSION['username']=$_GET['username'];
	
	if(isset($_GET['rememberme'] )&& $_GET['remember']=="true"){
	setcookie('username',$_GET['username'],time()+3600);
	echo "Welcome ", $_COOKIE['username']," your cookie is set","<br>";
	}
		header("Location: c.php");
	}
	
	
?>
<html>
	<form action="a.php" method="get">
		User Name:<input type="text"   name="username"/> <br><br>
		
		<input type="checkbox" value="true" name="rememberme"/> Remember me<br><br>
		<button type="submit">Log in</button>
		
	</form>
</html>