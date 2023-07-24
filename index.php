<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Authentication</title>
</head>

<body>
    <section class="contenedor">
        <div class="cuadro1">
            <p><img src="imagen/devchallenges.svg" alt=""></p>

            <h1>Join thousands of learners from <br>
                around the wordld
            </h1>

            <p>Master web developement by making real-life <br>
                projects. There are multiple paths for you to <br>
                choose
            </p>

        </div>




        <form action="index_db.php" method="POST" class="cuadro2">
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

            <input id="submit" type="submit" value="Start coding now" />

        </form>

        <div class="cuadro3">
            <p>or continue with these social profile</p>
            <div class="iconos">
                <a href="https://www.google.com/" target="_blank"><img src="imagen/Google.svg" alt=""></a>
                <a href="https://es-la.facebook.com/" target="_blank"><img src="imagen/Facebook.svg" alt=""></a>
                <a href="https://twitter.com/" target="_blank"><img src="imagen/Twitter.svg" alt=""></a>
                <a href="https://github.com/" target="_blank"><img src="imagen/Gihub.svg" alt=""></a>

            </div>
            <p> Adready a member? <a href="Login.php">Login</a></p>
        </div>
    </section>

</body>

</html>