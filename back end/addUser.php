<?php
include "connection.php";
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$mail = $_POST["mail"];
$user = $_POST["username"];
$pass = $_POST["password"];
$admin = $_POST["admin"];
$add = $connection->prepare("INSERT into users(firstName , lastName , username , mail , password,RetryPassword, idAdmin)values('$fname','$lname','$user','$mail','$pass','$pass','$admin')");
$add->execute();
header("location:dashboard.php");

?>