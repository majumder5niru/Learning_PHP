<?php
session_start();
session_unset();
session_destroy();
setcookie('name',"",time()-10);
setcookie('password',"",time()-10);
Header("Location:home.php");
?>