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
    <link rel="stylesheet" href="estilos/mantencion.css">
</head>
<body>
    <?php
        include("componentes/menu.php");
    ?>
    <section class="hero">
        <h1>Déjalo en nuestras manos</h1>
    </section>
    <section class="contenido">
        <p class="contenido-1">El sistema de riego automático y autónomo (energía y abastecimiento de agua propios) permite una mantención eficiente,
             asegurando la vida de las plantas haciendo mantención programada. </p>
        <figure class="contenido-2">
            <img src="./recursos/mantencion/riego.jpg" alt="fotos del sistema de riego, los bidones y todo el istema pa que se vea bien encachado">
        </figure>
        <p class="contenido-3">Te ofrecemos servicio de mantención que consiste en una visita cada 15 días en verano y una vez al mes en otoño, invierno y primavera. Y esta consiste en revisar el riego,
            el buen estado y crecimiento de las plantas y el sustrato. <br>
            El servicio de mantención incorpora la fertilización,
            control de plagas y enfermedades  con productos orgánicos. <br>
            Los restos orgánicos asociados a la mantención de la huerta serán compostados para la fabricación del sustrato de otras huertas,
            como parte del servicio.</p>
        <figure class="contenido-4">
            <img src="./recursos/index/huerta2.jpg" alt="fotos del sistema de riego, los bidones y todo el istema pa que se vea bien encachado">
        </figure>
    </section>
    <section class="mantencion">
        <h3>Agregar mantención</h3>    
        <form action="componentes/agregaralcarro3.php" method="post">
            <select name="mantencion" id="mantencion">
                <option value="1">1 mes $20000</option>
                <option value="2">2 meses $40000</option>
                <option value="3">3 meses $60000</option>
                <option value="6">6 meses $120000</option>
                <option value="12">12 meses $240000</option>
            </select>
            <input type="submit" value="Agregar" name="Agregar">
        </form>
    </section>
    <?php
        include("componentes/footer.php");
    ?>
</body>
</html>