<?php 

$usr=$_POST["username"];
$pwd=$_POST["password"];

if($usr== 'salvi' && $pwd=='1234' ){
    header("Location: home.php?usr=$usr"); /* Redirect browser */
    exit();
} else {
    header("Location: login.php");
    exit();
    }

?>