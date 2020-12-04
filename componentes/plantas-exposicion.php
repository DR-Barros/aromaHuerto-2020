<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "abrespac_aromahuerta") 
    or die("no conectado </br>");
    mysqli_set_charset($conexion, 'utf8');
    $consulta = "SELECT * FROM `plantas`";
    $ejecutar = mysqli_query($conexion, $consulta);
    $temporada = mysqli_fetch_row(mysqli_query($conexion, "SELECT * FROM `temporada`"));
    $plantas_fichas = "<h3>Plantas:</h3><div>";
    $nombre = "nombre";
    while($result=mysqli_fetch_array($ejecutar)){
        if ($result['temporada'] == "ambos" || $result['temporada'] == $temporada[0]){
            if($result['exposicion'] == $_POST['exposicion']){
                $plantas_fichas .=
                "<figure class='fichas'>
                    <img src='recursos/plantas/$result[$nombre]_Ficha.jpg'>
                </figure>";
            }
        }
    }
    $plantas_fichas .= "</div>";
    echo $plantas_fichas
?>