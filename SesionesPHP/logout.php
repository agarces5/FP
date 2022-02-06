<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="UTF-8">
        <title>Login</title>

    </head>

    <body>

        <?php

            session_unset();
            session_destroy();
            
        ?>

        <h1>Sesión cerrada</h1>

        <p>Has cerrado la sesión correctamente.</p>

        <p><a href='index.html'>Volver al formulario</a></p>

    </body>

</html>