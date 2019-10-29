<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "jaha_bd";
try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
} catch(PDOExeption $eror){
die("coneccion fallida:  ".$eror->getMessage());
}
?>