<?php
    session_start();
    if(!isset($_SESSION['activo'])){
        $_SESSION['activo'] = false;
    }
    if(!isset($_SESSION['tipo'])){
        $_SESSION = null;
    }
?>
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Aroma Huerta</title>
    <link rel='stylesheet' href='estilos/estilos.css'>
</head>
<body>
    <?php
        if($_SESSION['tipo'] === "admin"){
            include('componentes/menu.php');
            //$conexion = mysqli_connect("localhost", "root", "", "abrespac_aromahuerta");
            $conexion = mysqli_connect("localhost", "abrespac_dani", "submarino2020", "abrespac_aromahuerta");
            mysqli_set_charset($conexion, 'utf8');
            $consulta = "SELECT * FROM `blog`";
            $ejecutar = mysqli_query($conexion, $consulta);
            $temporada = mysqli_fetch_row(mysqli_query($conexion, "SELECT * FROM `temporada`"));
            $blog = "";
            while($result = mysqli_fetch_array($ejecutar)){
                $blog.= "<tr>"; 
                $blog.= "<th>".$result['titulo']."</th>"; 
                $blog.= "<th>".$result['link']."</th>"; 
                $blog.= "<th>".$result['descripcion']."</th>"; 
                $blog.= "<th>
                            <form action='componentes/editarblog.php' method='post'>
                            <button type='submit' value='".$result['titulo']."' name='eliminar'>eliminar</button>
                            </form>
                        </th>"; 
                $blog.= "</tr>"; 
            }
        } else{
            header("Location: index.php");
        }
    ?>
    <section class="editarblog">
        <form action="componentes/editarblog.php" method="post">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" maxlength="100" required="">
            <label for="link">link Youtube</label>
            <input type="text" name="link" id="link" maxlength="50" required="">
            <label for="descripcion">descripcion</label>
            <input type="text" name="descripcion" id="descripcion" maxlength="1000" required="">
            <input type="submit" value="enviar" name="enviar">
        </form>
        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>link</th>
                    <th>descripcion</th>
                    <th>eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    echo "$blog";
                ?>
            </tbody>
        </table>
    </section>
    <section class="temporada">
        <h3>Cambiar temporada</h3>
        <?php
            echo "Temporada actual: $temporada[0]";
        ?>
        <form action="componentes/editartemporada.php" method="post">
            <select name="temporada" id="temporada">
                <option value="verano">verano</option>
                <option value="invierno">invierno</option>
            </select>
            <input type="submit" value="enviar" name="enviar">
        </form>
    </section>
    <?php
        include("componentes/footer.php");
    ?>
</body>
</html>