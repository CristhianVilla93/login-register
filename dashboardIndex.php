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
    <title>Dashboard</title>
</head>
<body>
    <h1>!Bienvenido, <?= $_SESSION["usuario"]["email"] ?>!</h1>
    <h2>Usuario creado con exito</h2>
    <a href="logout.php">Log out</a>
</body>
</html>