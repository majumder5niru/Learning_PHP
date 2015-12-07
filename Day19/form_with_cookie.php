<!DOCTYPE HTML>
<html>
	<head>
		<script>
		function getCookie(){
			console.log("After loading",document.cookie);
		}
		</script>
	</head>
	<?php
		$displayForm = true;
		if(isset($_COOKIE['userName'])){
			$displayForm = false;
			echo "Welcome ", $_COOKIE['userName'],"<br>";
		}
		elseif(isset($_GET['user'])){
			$displayForm = false;
			setcookie("userName",$_GET['user'],time()+1800);
			$_COOKIE['userName'] = $_GET['user'];
			header("Location: homepage.php");
		
			echo "Welcome ", $_GET['user'],"<br>";
		}
	?>
	<script>
		console.log("before loading",document.cookie);
	</script>
	<body onload="getCookie()">
		<?php if($displayForm){?>
		<form action="form_with_cookie.php" method="get"align="center">
			User Name: <input type="text" name="user"/><br><br>
			Password : <input type="password" name="password"/><br><br>
			<button type="submit">Submit</button>
		</form>
		<?php };?>
	</body>
</html>