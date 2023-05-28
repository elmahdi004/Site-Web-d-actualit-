<?php
include "connection.php";
$index = $_COOKIE["IdDelete"];
$requete = $connection->query("DELETE from blogs where idUser = $index");
$requete_2 = $connection->query("DELETE from users where id = $index");
header("location:dashboard.php");
?>