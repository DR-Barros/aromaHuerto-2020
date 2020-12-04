<?php
    session_start();
    //$conexion = mysqli_connect("localhost", "root", "", "abrespac_aromahuerta");
    $conexion = mysqli_connect("localhost", "abrespac_dani", "submarino2020", "abrespac_aromahuerta");
    mysqli_set_charset($conexion, 'utf8');

    $usuario = $_POST['email'];
    $pass = md5($_POST['password']);

    $consulta = "SELECT * FROM usuarios WHERE mail = '$usuario' AND contraseña ='$pass' ";
    $ejecutar = mysqli_query($conexion, $consulta);
    $resul = mysqli_num_rows($ejecutar);
    if($resul > 0){
        $result=mysqli_fetch_array($ejecutar);
        $_SESSION['nombre']= $result['nombre'];
        $_SESSION['apellido']= $result['apellido'];
        $_SESSION['rut']= $result['rut'];
        $_SESSION['tipo']= $result['tipo'];
        $_SESSION['telefono']= $result['telefono'];
        $_SESSION['mail']= $result['mail'];
        $_SESSION['activo'] = true;
        header("Location:". getenv('HTTP_REFERER') ."?valida=si");
    } else {
        header("Location:". getenv('HTTP_REFERER') ."?erronea=si");
    }
?>