<?php

$connection = mysql_connect("elvencreations.com.mysql", "elvencreations_", "aliabbas123");
$db = mysql_select_db("elvencreations_", $connection);
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
if($user_check=$_SESSION['admin_login']){
    echo "Admin";
}elseif($user_check=$_SESSION['user_login']){
    echo "Account";
}else{
    echo "Login";
}

mysql_close($connection);
?>