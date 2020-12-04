<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "abrespac_aromahuerta") 
    or die("no conectado </br>");
    mysqli_set_charset($conexion, 'utf8');
    $consulta = "SELECT * FROM `plantas`";
    $ejecutar = mysqli_query($conexion, $consulta);
    $temporada = mysqli_fetch_row(mysqli_query($conexion, "SELECT * FROM `temporada`"));
    $plantas = "";
    $nombre = "nombre";
    $exposicion = "exposicion";
    while($result=mysqli_fetch_array($ejecutar)){
        if ($result['temporada'] == "ambos" || $result['temporada'] == $temporada[0]){
            if($result['exposicion'] == $_POST['exposicion']){
                $plantas .= 
                "<button class='$result[$nombre] button' onclick='agregarPlanta($result[0])'>
                    <img src='recursos/plantas/$result[$nombre].png' alt='$result[$nombre]'><br>
                    $result[$nombre]
                </button>";
            }
        }
    }
    echo $plantas;
?>