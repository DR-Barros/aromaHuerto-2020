<?php
    session_start();
    if(isset($_POST['enviar'])){
        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito'] = [];
        }
        $item = array(
            "descripcion" => "Huerta custom: ". $_POST['enviar'],
            "precio" => 100000 * $_POST['cantidad'],
            "cantidad" => $_POST['cantidad']
        );
        array_push($_SESSION['carrito'], $item);
        $_SESSION['huerta'] = [];
        header("Location: ../productos.php");
    }
    if(isset($_POST['Agregar'])){
        print_r($_POST);
        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito'] = [];
        }
        if($_POST['mantencion'] == 1){
            $item = array(
                "descripcion" => 'Mantencion 1 mes',
                "precio" => 20000
            );
        } else{
            $item = array(
                "descripcion" => "Mantencion ". $_POST['mantencion'] ." meses",
                "precio" => 20000 * $_POST['mantencion']
            );
        }
        array_push($_SESSION['carrito'], $item);
        header("Location: ../mantencion.php");
    }
?>