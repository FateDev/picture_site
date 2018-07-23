<?php
include 'user_session.php';

$username = $_SESSION["user_login"];

$email = $_POST["email"];
$password = $_POST["password"];

$server = "elvencreations.com.mysql";
$userdb = "elvencreations_";
$pass = "aliabbas123";
$link = mysqli_connect($server,$userdb,$pass);
mysqli_select_db($link,"elvencreations_");
        
$sql = "UPDATE common_users SET password='$password',email='$email' WHERE username='$username'";

if(mysqli_query($link,$sql)){
    mysqli_close($link);
    header ('Location: account.php');
}else{
    include 'head.php';
    include 'nav.php';
    echo "<h3 style=\"text-align:center;padding-top:200px;\"></h3>";
}



?>