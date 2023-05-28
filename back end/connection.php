<?php 
// Connection To The DataBase 
try{
$connection = new PDO("mysql:host=localhost;dbname=dev_projet;charset=utf8","root","");
}catch(Exception $e){
    echo "Error -> ".$e->getMessage();
}

?>