<?php
session_start();
include "connection.php";
$comment = $_POST["comment"];
// Blog Id in variable id on page blogsPage.php
// Id User in session Named idUser
$requete = $connection->query("INSERT into comments(idUser,idBlog,commentContent)values($_SESSION[idUser],$_SESSION[blogId],'$comment')");
header("location:blogPage.php")
?>