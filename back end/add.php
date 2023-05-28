<?php
session_start();
include "connection.php";  // for get id of users requete name is [exist]
// variables
$title = $_POST["title"];
$des = $_POST["desciption"];
$img = $_FILES["image"];
$UserId = $_SESSION["idUser"];

move_uploaded_file($img["tmp_name"],"../img-add/".$img["name"]);
$add = $connection->prepare("INSERT INTO `blogs` (`idUser`, `blogId`, `blogTitle`, `blogDes`, `blogImg`) VALUES ('$UserId', NULL, '$title', '$des', '$img[name]')");
$add->execute();
header("location:blogs.php");
?>