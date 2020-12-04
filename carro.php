<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aroma Huerta | Carro</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/carro.css">
</head>
<body>
    <?php
        include("componentes/menu.php");
    ?>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Productos</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_SESSION['carrito'])){
                    for($i = 0; $i < count($_SESSION['carrito']); $i++){
                        $index = $i +1;
                        $descripcion = $_SESSION['carrito'][$i]['descripcion'];
                        $precio = $_SESSION['carrito'][$i]['precio'];
                        if(isset($_SESSION['carrito'][$i]['cantidad'])){
                            $cantidad = $_SESSION['carrito'][$i]['cantidad'];
                        } else {
                            $cantidad = "1";
                        }
                        echo "<tr>";
                        echo "<th>$index</th>";
                        echo "<th>$descripcion</th>";
                        echo "<th>$precio</th>";
                        echo "<th>$cantidad</th>";
                        echo "<th>
                                <form action='componentes/eliminardelcarro.php' method='post'>
                                <button type='submit' value='$i' name='enviar'>X</button>
                                </form>
                            </th>";
                        echo "</tr>";  
                    }
                }
            ?>
            <tr>
                <th>Total:</th>
                <th></th>
                <th>
                    <?php
                        $totalcarrito = 0;
                        if(isset($_SESSION['carrito'])){
                            for($i = 0; $i < count($_SESSION['carrito']); $i++){
                                $totalcarrito += $_SESSION['carrito'][$i]['precio']; 
                            }
                        }
                        echo "$totalcarrito";
                    ?>
                </th>
                <th>
                    
                </th>
            </tr>
        </tbody>
    </table>
    <article>    
        <?php
            if(!isset($_SESSION['activo'])){
                $_SESSION['activo'] = false;
            }
            if(!$_SESSION['activo']){
                echo "<h2>Ingresar sesión</h2>";
                echo "<form action='componentes/validarusuario.php' method='post'>
                        <label for='email'>email:</label>
                        <input type='email' name='email' id='email' required=''>
                        <label for='password'>contraseña:</label>
                        <input type='password' name='password' id='password' required=''>
                        <input type='submit' value='Enviar' name='Enviar'>
                    </form>";
                echo "<a href='registro.php'>Registrarse</a>";
            }
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
            if($_GET["erronea"] == "si"){
                echo("<p class='mensaje'>Los datos no coinciden</p>");
            }
        ?>
    </article>
    <?php
        if(!$_SESSION['activo']){
            echo "<article>
                    <h2>Comprar sin registrarse</h2>
                    <form action='comprar.php' method='post'>
                        <label for='nombre'>Nombre</label>
                        <input type='text' name='nombre' id='nombre'>
                        <label for='apellido'>Apellido</label>
                        <input type='text' name='apellido' id='apellido'>
                        <label for='rut'>Rut</label>
                        <input type='text' name='rut' id='rut'>
                        <label for='mail'>Mail</label>
                        <input type='text' name='mail' id='mail'>
                        <label for='telefono'>Celular</label>
                        <input type='tel' name='telefono' id='telefono'>
                        <label for='direccion'>Dirección</label>
                        <input type='text' name='direccion' id='direccion'>
                        <input type='submit' value='Enviar' name='Enviar'>
                    </form>
                </article>
            ";
        }
    ?>
    <?php
        include("componentes/footer.php");
    ?>
</body>
</html>