<?php

    session_start();

    if ($_SESSION["Login"] != "YES") {
        header("Location: index.html");
    }

?>

<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="UTF-8" />
        <title>Login</title>

    </head>

    <body>

        <h1>Este documento está protegido</h1>

        <p>Sólo puedes ver esto si has iniciado sesión.</p>

        <p><a href='logout.php'>Cerrar sesión</a></p>

    </body>

</html>