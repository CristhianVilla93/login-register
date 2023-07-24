<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Authentication</title>
</head>

<body>
    <section class="contenedorlogin">
        <div class="cuadrologin1">
            <p><img src="imagen/devchallenges.svg" alt=""></p>

            <h1>Login</h1>

        </div>


        <form action="logindb.php" method="POST" class="cuadrologin2">
            <div class="correo">
                <label for="email"></label>
                <input type="email" id="email" placeholder="Email" name="email" />
                <img src="imagen/envelope-fill.svg" alt="">
            </div>

            <div class="contrasena">
                <label for="password"></label>
                <input type="password" required id="password" placeholder="Password" name="password" />
                <img src="imagen/lock-fill.svg" alt="">
            </div>

            <?php
            session_start();
            // Muestra un mensaje de acuerdo al intento de loggeo del usuario
            if (isset($_SESSION["error_login"])) {
                echo "<p>" . $_SESSION['error_login'] . "</p>";
            };

            // Elimina la variable de sesion "error login"
            unset($_SESSION["error_login"]);
            ?>

            <input id="submit" type="submit" value="Login">

        </form>

        <div class="cuadrologin3">
            <p>or continue with these social profile</p>
            <div class="iconos">
                <a href="https://www.google.com/" target="_blank"><img src="imagen/Google.svg" alt=""></a>
                <a href="https://es-la.facebook.com/" target="_blank"><img src="imagen/Facebook.svg" alt=""></a>
                <a href="https://twitter.com/" target="_blank"><img src="imagen/Twitter.svg" alt=""></a>
                <a href="https://github.com/" target="_blank"><img src="imagen/Gihub.svg" alt=""></a>

            </div>
            <p> Dont' have an account yet? <a href="index.php">Register</a></p>
        </div>
    </section>

   


</body>

</html>