<?php
    session_start();
    $_SESSION['nombre'] = "";
    $_SESSION['apellido'] = "";
    $_SESSION['rut'] = "";
    $_SESSION['tipo'] = "";
    $_SESSION['telefono'] = "";
    $_SESSION['mail'] = "";
    $_SESSION['activo'] = false;
    header('Location:' . getenv('HTTP_REFERER'));
?>