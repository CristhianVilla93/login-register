<?php

session_start();


if (!isset($_SESSION["usuario"])) {
    require("nonauthorized.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboardIndex.css">
    <title>Dashboard</title>
</head>
<body>
    <section class="saludo">
      
        <img src="imagen/excelente.jpg" alt="excelente">
        <h1>Hola, <?= $_SESSION["usuario"]["name"] ?> tu cuenta se ha creado con exito <br> retrocede para llenar tu perfil</h1>
        <a href="logout.php">Log out</a>

    </section>
</body>
</html>