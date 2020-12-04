<header class="barranav">
    <div class="Menu">
        <img src="recursos/iconos/menu.svg" alt="Menu" class="Menu-boton">
        <nav class="Menu-desplegable">
            <ul>
                <li>
                    <a href="quienes-somos.php">Quienes somos</a>
                </li>
                <li>
                    <a href="productos.php">Huerto</a>
                </li>
                <li>
                    <a href="mantencion.php">Mantención</a>
                </li>
                <li>
                    <a href="blog.php">Blog</a>
                </li>
                <?php
                    if(!isset($_SESSION['activo'])){
                        $_SESSION['activo'] = false;
                    }
                    if($_SESSION['activo']){
                        echo "<li><a>Hola ";
                        echo $_SESSION['nombre'];
                        echo " "; 
                        echo $_SESSION['apellido'];
                        echo "</a></li>";
                        echo "<li>
                                <a href='componentes/cerrar-sesion.php'>Cerrar Sesión</a>
                            </li>";
                        if($_SESSION['tipo'] === "admin"){
                            echo "<li>
                                    <a href='admin.php'>Admin</a>
                                </li>";
                            
                        }
                    } else{
                        echo "<li>
                                <a href='iniciar-sesion.php'>Iniciar Sesión</a>
                            </li>";
                    }
                ?>
            </ul>
        </nav>
    </div>
    <figure class="header-imgwraper">
        <a href="index.php" class="header-imglink">
            <img src="recursos/logo.jpg" alt="logo AromaHuerta" class="header-img">
        </a>
    </figure>
    <div class="Carro">
        <div class="Carro-boton">
            <img src="recursos/iconos/cart.svg" alt="carrito compras">
            <span class="Carro-boton_count">
                <?php
                    if(isset($_SESSION['carrito'])){
                        echo (count($_SESSION['carrito']));
                    } else {
                        echo "0";
                    }
                ?>
            </span>
        </div>
        <div class="Carro-tabla">
            <?php
                include("./componentes/carro.php");
            ?>
        </div>
    </div>
</header>
