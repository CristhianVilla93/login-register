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
    <link rel="stylesheet" href="dashboardIogin.css">
    <script src="cuadro.js" defer></script>
    <link rel="stylesheet" href="perfil.css">
    <title>Dashboard</title>
</head>

<body class="cuerpomayor">
    <nav>
        <ul id="barranav">
            <li><img class="loguito" src="imagen/devchallenges.svg" alt=""></li>
            <li>
                
            <p class="logoconimg"><img class="imgperfil" src="<?php echo $_SESSION["usuario"]["ruta_img"] ?>"> <span><?php echo $_SESSION["usuario"]["name"] ?><img src="imagen/caret-down-fill.svg" alt=""></span></p>
                <div id="cuadrodesple">
                    <ul>
                        <li><img src="imagen/person-circle.svg" alt=""><a href="perfil.php"><span>My profile</span></a></li>
                        <li><img src="imagen/people-fill.svg" alt=""><a href="#"><span>Group Chat</span></a></li>
                    </ul>
                    <hr>
                    <a href="logout.php"><img src="imagen/input.svg" alt=""><span>Log out</span></a>
                </div>
            </li>
        </ul>
    </nav>
    <section class="contenemayor">
        <div class="contenedor1">
            <div class="cuadro1">
                <h1>Personal info</h1>
                <p>Basic info, like your name and photo</p>
            </div>
            <div class="cuadro2">
                <div class="titulo">
                    <div class="titu1">
                        <h1>Profile</h1>
                        <p>Some info may be visible to other people </p>
                    </div>
                    <div class="titu2">
                        <a href="dashboardIogin.php">Edit</a>
                    </div>
                </div>
                <hr>
                <div class="datos1">
                    <p>PHOTO:<img src="<?php echo $_SESSION["usuario"]["ruta_img"] ?>" alt="Perfil"></p>
                    <hr>
                    <p>NAME:<span><?php echo $_SESSION["usuario"]["name"] ?></span></p>
                    <hr>
                    <p>BIO:<span><?php echo $_SESSION["usuario"]["bio"] ?></span></p>
                    <hr>
                    <p>PHONE:<span><?php echo $_SESSION["usuario"]["phone"] ?></span></p>
                    <hr>
                    <p>EMAIL:<span><?php echo $_SESSION["usuario"]["email"] ?></span></p>
                    <hr>
                    <p>PASSWORD: <span>************</span></p>
                    <hr>
                </div>

            </div>
        </div>

    </section>
</body>

</html>