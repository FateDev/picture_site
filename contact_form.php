<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$message = $email." ------- ".$message;

$to = "admin@elvencreations.com";

mail($to,"Email from $name",$message);

header ('Location: message_sent.php');

?>