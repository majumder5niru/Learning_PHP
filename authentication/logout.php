<?php
session_start();
session_unset();
session_destroy();
setcookie('remember',"",time()-1000);
header("Location:file1.php");
?>