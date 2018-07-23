<?php

    $username = $_POST["username"];

    $link = mysqli_connect("elvencreations.com.mysql","elvencreations_","aliabbas123");
    mysqli_select_db($link,"elvencreations_");
    
    $sql = "SELECT * FROM common_users WHERE username='$username'";
    $result = mysqli_query($link,$sql);
    
    $row = mysqli_fetch_array($result);
    
    $email = $row["email"];
    $username = $row["username"];
    $forgotten_password = $row["password"];
    
    $headers = "From: admin@elvencreations.com" . "\r\n";
    $subject= "Forgotten Password";
    $msg = "Your username is $username and, your forgotten password is: $forgotten_password.";

    mail($email,$subject,$msg,$headers);
    
    header 'Location: password_sent.php';