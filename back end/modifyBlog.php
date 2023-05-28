<?php
include "connection.php";
$idBlog = $_COOKIE["idModBlog"];
$title = $_POST["title"];
$des = $_POST["desciption"];
$image = $_FILES["image"];
move_uploaded_file($image["tmp_name"],"../img-add/$image[name]");
$add = $connection->query("UPDATE blogs SET blogTitle = '$title', blogDes = '$des' , blogImg = '$image[name]' where blogId = $idBlog");
header("location:dashboard.php");

?>