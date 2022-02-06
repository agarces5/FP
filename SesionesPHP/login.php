<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="UTF-8" />
        <title>Login</title>

    </head>

    <body>

        <?php

            $user = [
                "name" => "php",
                "pass" => "php"
            ];

            if ($_POST["username"] === $user["name"] && $_POST["password"] === $user["pass"]) {
                session_start();
                $_SESSION["Login"] = "YES";
                echo "<h1>Has iniciado sesión correctamente</h1>";
                echo "<p><a href='protected.php'>Enlace al archivo protegido</a><p/>";
            } else {
                session_start();
                $_SESSION["Login"] = "NO";
                echo "<h1>No has iniciado sesión correctamente </h1>";
                echo "<p><a href='protected.php'>Enlace al archivo protegido</a></p>";
            }
            
        ?>

    </body>

</html>