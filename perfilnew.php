<?php
// inicio el uso de las variables de sesion
session_start();

$datos = $_SESSION["datos_usuario"];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboardIogin.css">
    <script src="cuadro.js" defer></script>
    <title>Dashboard</title>
</head>

<body>

    <nav>
        <ul>
            <li>LOGO</li>
            <li>
                <?php echo $datos["name"] ?>
                <div id="cuadrodesple">
                    <ul>
                        <li><a href="#">My profile</a></li>
                        <li><a href="#">Group Chat</a></li>
                    </ul>
                    <hr>
                    <a href="logout.php">Log out</a>
                </div>
            </li>
        </ul>
    </nav>
    <section>
        <div>
            <h1>Personal info</h1>
            <p>Basic info, like your name and photo</p>
        </div>
        <div>
            <div>
                <h1>Profile</h1>
                <p>Some info may be visible to other people </p>
                <div>
                    <a href="dashboardIogin.php">Edit</a>
                </div>
            </div>

            <div>
                <p>PHOTO <img src="<?= $datos["ruta_img"] ?>"></p>
                <hr>
                <p>NAME <?= $datos["name"] ?></p>
                <hr>
                <p>BIO <?= $datos["bio"] ?></p>
                <hr>
                <p>PHONE <?= $datos["phone"] ?></p>
                <hr>
                <p>EMAIL <?= $datos["email"] ?></p>
                <hr>
                <p>PASSWORD <?= $datos["contrase"] ?></p>
                <hr>

            </div>

        </div>
    </section>




    <h1>!Bienvenido, <?= $_SESSION["usuario"]["name"] ?>!</h1>
    <a href="logout.php">Log out</a>
</body>

</html>