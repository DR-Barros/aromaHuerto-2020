<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aroma Huerta</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/index.css">
</head>
<body>
    <?php
        include("componentes/menu.php");
    ?>
    <section class="hero">
        <h1>...date un gusto</h1>
    </section>
    <section class="contenido">
        <div class="img">
            <img src="recursos/index/huerto.jpg" alt="">
        </div>
        <div class="text">
            <h2>...tu huerto</h2>
            <div class="descripcion">
                <ul>
                    <li>
                        <b>Huerta autónoma:</b> Diseñada profesionalmente para que crezca con una selección adecuada de especies. El riego automático asegura una eficiente entrega de agua.
                    </li>
                    <li>
                        <b>Huerta Ecológica:</b> Con fertilizantes orgánicos, cosecha de agua y almácigos obtenidos de un cooperativa local.
                    </li>
                    <li>
                        <b>Huerta PARA TI:</b> Con las especies que TU seleccionas y que son apropiadas para tus necesidades.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="link">
        <div>
            <p>
                Podrás elegir dentro de una paleta de especies comestibles, 
                aromáticas y medicinales, obteniendo más alimento en poco espacio
            </p>
            <a href="productos.php">Armar huerta</a>
        </div>
    </section>
    <section class="contacto">
        <h2>…con cuánto espacio dispones ?</h2>
        <div class="contacto_descripcion">
            <figure>
                <img src="recursos/index/dimensiones.jpg" alt="">
            </figure>
            <p>
                Nuestro HUERTO tiene 80cm de alto, 115 cm de largo y 30 cm de profundidad.
                <span>¿Cuántos vas a llevar?</span>
            </p>
        </div>
        <div class="boton">
            <p class="titulo">Hogar</p>
            <p class="boton_descripcion">
                Verifica dónde pondrás tu huerto para asegurar la cabida y la exposición solar adecuadas.
                Si tienes alguna consulta no dudes en contactarnos, te asesoraremos para que tu espacio de huerto sea el adecuado.
            </p>
        </div>
        <div class="boton">
            <p class="titulo">Edificio</p>
            <p class="boton_descripcion">
                Para espacios comunes o como complemento al acceso de tu edificio el HUERTO puede conformar el espacio que necesitas.
                Contáctate y te asesoraremos para evaluar cuántos módulos requieres!!!
            </p>
        </div>
    </section>
    
    <?php
        include("componentes/footer.php");
    ?>
</body>
</html>