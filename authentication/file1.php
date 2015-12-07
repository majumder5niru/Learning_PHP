<?php
session_start();

//$name = $_POST['name'];
if(isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
    if(isset($_POST['remember'])) 
    {
        setcookie('remember', $_POST['name'], time() + 400);
        
        //setcookie('password',$password,time()+400);;
    }

    header("Location:file3.php");
}
?>

<html>
<body>
    <h1>Session and COOKIE</h1>
    <form action="file1.php" method="post">
        <input type="text" name="name" placeholder="Username"><br>
        <button name="submit" type="submit">
            Sign in</button>
        <label class="checkbox pull-left"><br>
            <input type="checkbox" value="1" name="remember">
            Remember me
        </label>
        <br><br>
    </form>
</body>
</html>
                    