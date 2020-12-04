<?php
    session_start();
    $conexion = mysqli_connect("localhost", "root", "", "abrespac_aromahuerta") 
    or die("no conectado </br>");
    mysqli_set_charset($conexion, 'utf8');
    $consulta = "SELECT * FROM `plantas`";
    $ejecutar = mysqli_query($conexion, $consulta);
    $temporada = mysqli_fetch_row(mysqli_query($conexion, "SELECT * FROM `temporada`"));
    $plantas = "";
    $plantas_fichas = "";
    $nombre = "nombre";
    while($result=mysqli_fetch_array($ejecutar)){
        if ($result['temporada'] == "ambos" || $result['temporada'] == $temporada[0]){
            $plantas .= 
            "<button class='$result[$nombre] button' onclick='agregarPlanta($result[0])'>
                <img src='recursos/plantas/$result[$nombre].png' alt='$result[$nombre]'><br>
                $result[$nombre]
            </button>";
            $plantas_fichas .=
            "<figure class='fichas'>
                <img src='recursos/plantas/$result[$nombre]_Ficha.jpg'>
            </figure>";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aroma Huerta | Productos</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="estilos/armar-huerta.css">
</head>
<body>
    <?php
        include("componentes/menu.php");
    ?>
    <section class="hero">
        <h1>Huerto personalizado:</h1>
    </section>
    <section class="exposicion">
        <h3>…arma tu Huerto según tu exposición solar</h3>
        <div>
            <button onclick="elegirexposicion('sol')" id="sol">
                <img src="./recursos/huerto/sol.png">
                <p>Sol diario por 6 o más horas</p>
            </button>
            <button onclick="elegirexposicion('semi')" id="semi">
                <img src="./recursos/huerto/medio sol.png">
                <p>Sol diario por menos de 6 horas</p>
            </button>
            <button onclick="elegirexposicion('sombra')" id="sombra">
                <img src="./recursos/huerto/sombra.png">
                <p>No recibe sol directo</p>
            </button>
        </div>
    </section>
    <section class="huertawraper" >
        <div class='huerta-botones' id='huerta-botones'>
            <?php
                print_r($plantas);
            ?>
        </div>
        <div class="huerta">
            <div class="huerta-maceta">
                <div  class="0" id="0" onclick="eliminarPlanta('0')"></div>
                <div class="1" id="1" onclick="eliminarPlanta('1')"></div>
                <div class="2" id="2" onclick="eliminarPlanta('2')"></div>
                <div class="3" id="3" onclick="eliminarPlanta('3')"></div>
            </div>
            <div class="huerta-maceta">
                <div class="4" id="4" onclick="eliminarPlanta('4')"></div>
                <div class="5" id="5" onclick="eliminarPlanta('5')"></div>
                <div class="6" id="6" onclick="eliminarPlanta('6')"></div>
                <div class="7" id="7" onclick="eliminarPlanta('7')"></div>
            </div>
            <div class="huerta-maceta">
                <div class="8" id="8" onclick="eliminarPlanta('8')"></div>
                <div class="9" id="9" onclick="eliminarPlanta('9')"></div>
                <div class="10" id="10" onclick="eliminarPlanta('10')"></div>
                <div class="11" id="11" onclick="eliminarPlanta('11')"></div>
            </div>
            <div class="huerta-maceta">
                <div class="12" id="12" onclick="eliminarPlanta('12')"></div>
                <div class="13" id="13" onclick="eliminarPlanta('13')"></div>
                <div class="14" id="14" onclick="eliminarPlanta('14')"></div>
                <div class="15" id="15" onclick="eliminarPlanta('15')"></div>
            </div>
        </div>
        <form action="componentes/agregaralcarro3.php" method="post" id="Carro" class="hide">
            <select name="cantidad" id="cantidad">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <button type="submit" id="botonCarro" value="0" name="enviar">Agregar Al Carro</button>
        </form>
    </section>
    <section class="fichas_wraper" id="fichas_wraper">
        <h3>Plantas:</h3>
        <div>
            <?php
                echo $plantas_fichas;
            ?>
        </div>
    </section>
    <?php
        include("componentes/footer.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="huerta.js"></script>
</body>
</html>