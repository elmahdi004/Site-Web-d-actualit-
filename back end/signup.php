<?php
include "connection.php";
// our variables
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$userName = $_POST["username"];
$mail = $_POST["mail"];
$password = $_POST["password"];
$RetryPassword = $_POST["retry_password"];
    if($password === $RetryPassword){
$requete = $connection->query("INSERT Into users(firstName,lastName,username,mail,password,RetryPassword)values('$firstName','$lastName','$userName','$mail','$password','$RetryPassword')");
header("Location:../login.html");
}else{
    header("Location:../signup.html");
}

?>