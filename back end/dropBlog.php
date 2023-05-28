<?php
include "connection.php";
$index = $_COOKIE["IdDeleteBlog"];
$requete_2 = $connection->query("DELETE from comments where idBlog = $index");
$requete = $connection->query("DELETE from blogs where blogId = $index");
header("location:dashboard.php");
?>