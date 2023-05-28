<?php
include "connection.php";
// Variables 
$user = $_POST["user"];
$pass = $_POST["password"];
// session Start
session_start();
$exist = $connection->query("SELECT * from users where username = '$user' and password = '$pass'");
if($exist->rowCount() === 1){
    $data = $exist->fetch();
 $_SESSION["firstName"] = $data["firstName"];
 $_SESSION["lastName"] = $data["lastName"];
 $_SESSION["idUser"] = $data["id"];
 $_SESSION["Admin"] = $data["idAdmin"];
 header("location:blogs.php");
}else{
        header("location:../login.html");
}
 ?>