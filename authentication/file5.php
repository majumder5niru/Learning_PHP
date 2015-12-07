<?php
session_start();
if(!isset($_SESSION['name']) && !isset($_COOKIE['remember']))
{
    header("Location:file1.php");
}
if(isset($_SESSION['name'])){
    echo "file5 page and Session Name is :",$_SESSION['name'];
}
elseif(isset($_COOKIE['remember']))
{
    echo "file5 page and Cookie Name is :",$_COOKIE['remember'];
}
echo "<br> <a href='file3.php'>file3 page </a>";
echo "<br> <a href='file4.php'>file4 page </a>";
echo "<br> <a href='file5.php'>file5 page </a>";
echo "<br> <a href='logout.php'> logout </a>";
?>