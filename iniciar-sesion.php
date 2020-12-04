<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aroma Huerta | Inicio de sesión</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/iniciar-sesion.css">
</head>
<body>
    <?php
        include("componentes/menu.php");
    ?>
    <section class="hero">
        <h1>Iniciar sesión</h1>
    </section>
    <section class="sesionBox">
        <form action="componentes/validarusuario.php" method="post">
            <label for="email">email:</label>
            <input type="email" name="email" id="email" required="">
            <label for="password">contraseña:</label>
            <input type="password" name="password" id="password" required="">
            <input type="submit" value="Enviar" name="Enviar">
        </form>
        <?php
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
            if($_GET["erronea"] == "si"){
                echo("<p class='mensaje'>Los datos no coinciden</p>");
            } else if ($_GET["valida"] == "si"){
                header("Location: index.php");
            }
        ?>
        <a href="registro.php">Registrarse</a>
    </section>
    <?php
        include("componentes/footer.php");
    ?>
</body>
</html>