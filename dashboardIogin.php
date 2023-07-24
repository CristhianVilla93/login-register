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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>

    <section>

        <nav>
            <ul>
                <li><img class="loguito" src="imagen/devchallenges.svg" alt=""></li>
                <li>

                    <p class="logoconimg"><img class="imgperfil" src="<?php echo $_SESSION["usuario"]["ruta_img"] ?>"> <span><?php echo $_SESSION["usuario"]["name"] ?><img src="imagen/caret-down-fill.svg" alt=""></span></p>

                    <div id="cuadrodesple">
                        <ul>
                            <li><a href="perfil.php"><img src="imagen/person-circle.svg" alt=""> <span>My profile</span></a></li>
                            <li><a href="#"><img src="imagen/people-fill.svg" alt=""> <span>Group Chat</span></a></li>
                        </ul>
                        <hr>
                        <a href="logout.php"><img src="imagen/input.svg" alt=""> <span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="back">
            <div id="volver">
                <a href="perfil.php"><img src="imagen/flecha.svg"> Back</a>
            </div>

        </div>
        <div class="formulario">
            <h1>Change info</h1>
            <p>Change will be reflected to every services</p>
            <br>
            <form action="informacion.php" method="post" enctype="multipart/form-data">
                <div id="fotos">
                    <div id="photo">
                        <label for="img"><img src="imagen/camera-fill.svg"></label>
                        <img src="<?php echo $_SESSION["usuario"]["ruta_img"] ?>" alt="">
                        <input type="file" name="imagen" id="img">
                    </div>
                    <p>CHANGE PHOTO</p>
                </div>

                <br>
                <label class="labe" for="name">Name</label> <br>
                <input type="text" name="nombre" id="name" placeholder="Enter your name..">
                <br>
                <br>
                <label class="labe" for="bio">Bio</label><br>
                <input type="text" name="biografia" id="bio" placeholder="Enter your bio..">
                <br>
                <br>
                <label class="labe" for="phone">Phone</label><br>
                <input type="number" name="telefono" id="phone" placeholder="Enter your phone..">
                <br>
                <br>
                <label class="labe" for="email">Email</label><br>
                <input type="email" name="correo" required id="email" placeholder="Enter your email..">
                <br>
                <br>
                <label class="labe" for="password">Pasword</label><br>
                <input type="password" name="contrasena" required id="password" placeholder="Enter your password..">
                <br>
                <br>
                <input id="Save" type="submit" value="Save">
            </form>
        </div>

    </section>

</body>

</html>