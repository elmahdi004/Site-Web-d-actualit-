<?php
include "connection.php";
$UserId = $_COOKIE["IdMod"];
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$mail = $_POST["mail"];
$user = $_POST["username"];
$pass = $_POST["password"];
$admin = $_POST["admin"];
$add = $connection->prepare("UPDATE users SET id = '$UserId' , firstName = '$fname' , lastName = '$lname' , username = '$user', mail = '$mail', password = '$pass' , idAdmin = '$admin' where id = $_COOKIE[IdMod]");
$add->execute();
header("location:dashboard.php");

?>