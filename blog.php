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
    <link rel="stylesheet" href="estilos/blog.css">
</head>
<body>
    <?php
        include("componentes/menu.php");
    ?>
    <section class="blog">
        <section class="hero">
            <h1>Blog</h1>
        </section>
        <?php
            //$conexion = mysqli_connect("localhost", "root", "", "abrespac_aromahuerta");
            $conexion = mysqli_connect("localhost", "abrespac_dani", "submarino2020", "abrespac_aromahuerta");
            mysqli_set_charset($conexion, 'utf8');
            $consulta = "SELECT * FROM `blog`";
            $ejecutar = mysqli_query($conexion, $consulta);
            $blog = array();
            $idx = 0;
            while($result = mysqli_fetch_array($ejecutar)){
                $blog[$idx] = [$result[0], $result[1], $result[2]];
                $idx++;
            }
            //print_r($blog);
            for($i = count($blog)-1; $i >= 0; $i--){
                echo "<article class='articulo'>";
                echo "<h2>".$blog[$i][0]."</h2>";
                echo "<iframe src='https://www.youtube.com/embed/". substr($blog[$i][1], 32) ."' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                echo "<p>". $blog[$i][2] ."<p>";
                echo "</article>";
            }
        ?>
    </section>
    <?php
        include("componentes/footer.php");
    ?>
</body>
</html>