<?php
    session_start();
    //$conexion = mysqli_connect("localhost", "root", "", "abrespac_aromahuerta");
    $conexion = mysqli_connect("localhost", "abrespac_dani", "submarino2020", "abrespac_aromahuerta");
    mysqli_set_charset($conexion, 'utf8');
    if(isset($_POST['enviar'])){
        $temporada = $_POST['temporada'];
        $consulta = "UPDATE temporada SET temporada='$temporada' WHERE id='0'";
        $ejecutar = mysqli_query($conexion, $consulta);
        header('Location: ../admin.php');
    }