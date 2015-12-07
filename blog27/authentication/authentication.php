<?php
//session start and check for authentication
session_start();
if(!isset($_SESSION['name']) && !isset($_COOKIE['name']))
{
    Header("Location:home.php");
}
if(isset($_SESSION['name']) && isset($_SESSION['password'])){
    $name=$_SESSION['name'];
    $password=$_SESSION['password'];
}
elseif(isset($_COOKIE['name'])&& isset($_COOKIE['password']))
{
    $name=$_COOKIE['name'];
    $password=$_COOKIE['password'];
}
else{
    $name="";
    $password="";
}

?>