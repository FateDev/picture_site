<?php

$connection = mysql_connect("elvencreations.com.mysql", "elvencreations_", "aliabbas123");
$db = mysql_select_db("elvencreations_", $connection);
session_start();

if($user_check=$_SESSION['admin_login']){
    $sql=mysql_query("SELECT username FROM users WHERE username='$user_check'", $connection);
    $row = mysql_fetch_array($sql);
    $login_session =$row['username'];
    if(!isset($login_session)){
    	mysql_close($connection);
    	header('Location: login.php');
    }else{
        header('Location: admin.php');
    }
}elseif($user_check = $_SESSION['user_login']){
    $sql=mysql_query("SELECT username FROM common_users WHERE username='$user_check'", $connection);
    $row = mysql_fetch_array($sql);
    $login_session =$row['username'];
    if(!isset($login_session)){
    	mysql_close($connection);
    	header('Location: login.php');
    }else{
        header('Location: account.php');
    }
}else{
    header('Location: login.php');
}
?>