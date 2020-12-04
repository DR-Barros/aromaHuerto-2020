<?php
    session_start();
    //$conexion = mysqli_connect("localhost", "root", "", "abrespac_aromahuerta");
    $conexion = mysqli_connect("localhost", "abrespac_dani", "submarino2020", "abrespac_aromahuerta");
    mysqli_set_charset($conexion, 'utf8');
    if($_POST['password1'] === $_POST['password2']){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $rut = $_POST['rut'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $tipo = "cliente";
        $contraseña = md5($_POST['password2']);

        $consulta = "INSERT INTO usuarios (rut, nombre, apellido, tipo, telefono, mail, contraseña) 
        VALUES ('$rut', '$nombre', '$apellido', '$tipo', '$celular', '$email', '$contraseña')";
        $ejecutar = mysqli_query($conexion, $consulta);
        header("Location: ../registro.php?valida=si");
    } else{
        header("Location: ../registro.php?erronea=si");
    }
?>