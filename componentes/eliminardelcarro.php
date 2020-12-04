<?php
    session_start();
    if(isset($_POST['enviar'])){
        unset($_SESSION['carrito'][$_POST['enviar']]);
        $_SESSION['carrito'] = array_values($_SESSION['carrito']);
        header('Location: '. getenv('HTTP_REFERER'));
    }
?>