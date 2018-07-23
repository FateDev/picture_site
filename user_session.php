<?php

$link = mysqli_connect("elvencreations.com.mysql","elvencreations_","aliabbas123");
mysqli_select_db($link,"elvencreations_");

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

    $user_check = $_SESSION["user_login"];
    $sql = "SELECT username FROM common_users WHERE username='$user_check'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result);
    $user_check = $row["username"];
    if(!isset($user_check)){
        header ('Location: login_first.php');
        mysqli_close($link);
    }
    
?>