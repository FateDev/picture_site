<?php

$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$real_password = $_POST["real_password"];

#echo $email."<br>".$username."<br>".$password."<br>".$real_password;

if($password == $real_password){
    include 'head.php';
    include 'nav.php';
    echo "  <main class=\"content\">
            <style>h3 a{transition:background-color 0.2s, color 0.2s;color:#000;padding:10px;} h3 a:hover{background-color:rgb(44,62,80);color:#fff;}</style>
            <h3 style=\"text-align:center;padding-top:200px;\"><a href=\"login.php\" style=\"text-decoration:none;\">Your account has been created. Click here to go to login.</a></h3>
            </main>";
    
    $userdb = "elvencreations_";
    $pass = "aliabbas123";
    $link = mysqli_connect($server,$userdb,$pass);
    mysqli_select_db($link,"elvencreations_");
    
    $sql = "INSERT INTO common_users (username,password,email) VALUES ('$username','$password','$email')";
    mysqli_query($link,$sql);
}

?>