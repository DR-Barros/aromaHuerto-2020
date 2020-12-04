<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aroma Huerta | Registrarse</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/registro.css">
</head>
<body>
    <?php
        include("componentes/menu.php");
    ?>
    <section class="hero">
        <h1>Registrarse</h1>
    </section>
    <section class="registro">
        <form action="componentes/agregarusuario.php" method="post">
            <label for="nombre">nombre:</label>
            <input type="text" name="nombre" id="nombre" required="">
            <label for="apellido">apellidos:</label>
            <input type="text" name="apellido" id="apellido" required="">
            <label for="rut">rut: (con puntos y guion) ej:(11.111.111-k)</label>
            <input type="text" name="rut" id="rut" required="">
            <label for="email">email:</label>
            <input type="email" name="email" id="email" required="">
            <label for="celular">celular:</label>
            <input type="tel" name="celular" id="celular" required="">
            <label for="password1">contraseña:</label>
            <input type="password" name="password1" id="password1" required="">
            <label for="password2">repetir contraseña:</label>
            <input type="password" name="password2" id="password2" required="">
            <input type="submit" value="Enviar" name="Enviar">
        </form>
        <?php
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
            if($_GET["erronea"] == "si"){
                echo("<p class='mensaje'>Las contraseñas no coinciden</p>");
            } else if ($_GET["valida"] == "si"){
                echo("<p class='mensaje'>Los datos fueron ingresados exitosamente</p>");
            }
        ?>
        <a href="iniciar-sesion.php">Iniciar Sesión</a>
    </section>
    <?php
        include("componentes/footer.php");
    ?>
</body>
</html>