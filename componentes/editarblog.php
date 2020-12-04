<?php
    session_start();
    //$conexion = mysqli_connect("localhost", "root", "", "abrespac_aromahuerta");
    $conexion = mysqli_connect("localhost", "abrespac_dani", "submarino2020", "abrespac_aromahuerta");
    mysqli_set_charset($conexion, 'utf8');
    if(isset($_POST['enviar'])){
        $titulo = $_POST['titulo'];
        $link = $_POST['link'];
        $descripcion = $_POST['descripcion'];
        $consulta = "INSERT INTO blog (titulo, link, descripcion)
        VALUES ('$titulo', '$link', '$descripcion')";
        $ejecutar = mysqli_query($conexion, $consulta);
        header('Location: ../admin.php');
    } else if(isset($_POST['eliminar'])){
        $titulo = $_POST['eliminar'];
        $consulta = "DELETE FROM blog WHERE titulo='$titulo'";
        $ejecutar = mysqli_query($conexion, $consulta);
        header('Location: ../admin.php');
    } else {
        header('Location: ../index.php');
    }
?>