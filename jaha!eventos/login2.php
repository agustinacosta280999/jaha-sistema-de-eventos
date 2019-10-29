<?php
    session_start();
  
    include("bd.php"); //se incluye la conexion
    if(isset($_SESSION['email'])){
        header('location: index.php');
    }
    //si el metodo de envio es post va a realizar todas las accioness descriptas en la condicion
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
       // $password = hash('sha512', $pwd);--------->encriptar contraseña


       //realizar la consulta sql
       $sql = "SELECT * FROM usuarios WHERE email = '$email' and password = '$pwd' ";
       $resultado = $conn->query($sql)->fetchAll();

       //si el usuario existe, guardar el usuario en una sesion y mostrar el index.
       if ((count($resultado))>0){
            $_SESSION['email'] = $email;
            $_SESSION['Id_tipo_de_usuario']= $resultado[0]['Id_tipo_de_usuario'];
            header('location: index.php');
            
       }else {
           echo 'el usuario no existe';

       }

    }
    require 'login.html';
    ?>