<?php

if  ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    require("connection.php");
    

    
    $email = $_POST["email"];
    $pass = $_POST["password"];
    

    $query = "SELECT * FROM usuarios WHERE email='$email' ";

    $resultado = $mysqli-> query($query);
    
    $numFilas = $resultado->num_rows;
   
    
    session_start();

    // Corroboro el numero de filas
    if ($numFilas === 1) {
        // Convierto los datos a un array asociativo
        $datos = $resultado->fetch_assoc();
      
       $resultadoPass= password_verify ($pass , $datos["contrase"]); 

        if ($resultadoPass === true) {
            // Guardo los datos en la variable de sesion "Usuario"
            
            $_SESSION["usuario"] = $datos;
    
            // // Redirecciono al usuario al dashboard.php
            header("location: perfil.php");
           
        }else{
            $_SESSION["error_login"]= "no existe la cuenta";
            header("Location: login.php");
          
        }

    }else{
        // Redirecciono al usuario al index.php
        $_SESSION["error_login"]= "no existe la cuenta";
        header("Location: login.php");
      
    }
    
}