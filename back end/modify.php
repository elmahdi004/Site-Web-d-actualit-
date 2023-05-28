<?php
include "connection.php";
$des = $_POST["des"];
$img = $_FILES["image"];
$UserId = $_COOKIE["IdMod"];
$title = $_POST["title"];
move_uploaded_file($img["tmp_name"],"../img-add/".$img["name"]);
$add = $connection->prepare("UPDATE blogs SET idUser = '$UserId' , blogTitle = '$title' , blogDes = '$des' , blogImg = '$img[name]' where idUser = $_COOKIE[IdMod]");
$add->execute();
header("location:dashboard.php");
?>