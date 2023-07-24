<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    extract($_POST);

    require("connection.php");


    // else{}

    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO usuarios(email, contrase) VALUES ('$email','$hash')";
    
    $resultado = $mysqli ->query($query);
    
    session_start();

    if ($resultado) {
        // preparo el query para traer el registro que he guardado en la
        // base de datos
        $queryUsuario = "SELECT * FROM usuarios WHERE email = '$email' AND contrase = '$hash'";

        // ejecuto el query
        $usuarioDB = $mysqli->query($queryUsuario);

        // Guardo los datos de la bd en la variable de sesion
        $_SESSION["usuario"]= $usuarioDB->fetch_assoc();

        // Redirecciona al usuario al dashboard
        header("Location: dashboardIndex.php");
    }


    
}
