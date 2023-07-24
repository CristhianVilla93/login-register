<?php
    session_start();
    
    

if ($_SERVER["REQUEST_METHOD"]=== "POST") {
    extract($_POST);
    require("connection.php");
   
    $temporal = $_FILES["imagen"]["tmp_name"];

    
    $hash = password_hash($contrasena, PASSWORD_DEFAULT);

    $rutaCompleta = "img_subidas/" . $_FILES["imagen"]["name"];

    
    move_uploaded_file($temporal, $rutaCompleta);

    $idUsuario = $_SESSION["usuario"]["id"];
   

    $query = "UPDATE  usuarios SET name ='$nombre', bio='$biografia', phone='$telefono', email='$correo', contrase='$hash', ruta_img='$rutaCompleta'  WHERE id =$idUsuario";
    

    $resultado = $mysqli->query($query);

    print_r($idUsuario);


    if ($resultado) {

     
        $query = "SELECT * FROM usuarios WHERE email = '$correo'";

        // ejecuto el query
        $usuarioDB = $mysqli->query($query);

        $data = $usuarioDB->fetch_assoc();

        

        session_start();
        


        // Guardo los datos de la bd en la variable de sesion
        $_SESSION["usuario"]= $data;

        // Redirecciona al usuario al dashboard
        header("Location: perfil.php");
    }

    
   
}

