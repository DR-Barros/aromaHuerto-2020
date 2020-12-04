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
    <link rel="stylesheet" href="estilos/quienes-somos.css">
</head>
<body>
    <?php
        include("componentes/menu.php");
    ?>
    <section class="hero">
        <h1>¿Quienes Somos?</h1>
    </section>
    <section class="descripcion">
        <p>Somos un grupo de profesionales apasionados por el medio ambiente y la vida saludable que decidimos unirnos,
             compartir nuestras disciplinas y visiones para cultivar una vida sana en tu hogar.</p>
        <p>Queremos llevar la HUERTA a tu vida cotidiana, con un diseño que facilite el que la puedas disfrutar en tu espacio.</p>
        <p>Anímate a cultivar sabores y aromas de manera sustentable independiente de tus labores cotidianas.</p>
    </section>
    <section class="personas">
        <figure class="imgwraper">
            <img src="recursos/nosotros/equipo.png" alt="foto del equipo">
        </figure>
        <div class="personas-text">
            <p>Valeria Agrónoma, especialista en huertas urbanas</p>
            <p>Rodrigo Ingeniero, especialista en economía circular</p>
            <p>Magdalena Arquitecta, especialista en paisaje sustentable</p>
        </div>
    </section>
    <div class="video-wraper">
        <iframe class="video"  
            src="https://www.youtube.com/embed/nRHo7DC1bC8" 
            frameborder="0" 
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
    <?php
        include("componentes/footer.php");
    ?>
</body>
</html>