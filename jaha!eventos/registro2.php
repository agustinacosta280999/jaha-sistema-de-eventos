<?php
session_start();
require 'bd.php';

if (!empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['nombre'])){

    $nombre = $_POST["nombre"];
    $email= $_POST['email'];
    $password= $_POST['pwd'];

try {
    $sql = "INSERT INTO usuario(nombre_usuario, correo_usuario, contraseña_usuario) VALUES ('".$nombre."','".$email."','".$password."')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
      
    echo true;
} 
catch (PDOExeption $error) {
    echo $error;
}
 
} else {
    echo false;
}
?>