<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Productos</th>
            <th>Precio</th>
            <th>Cantidad</th>
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
                    echo "</tr>";   
                }
            }
        ?>
    </tbody>
    <tfoot>
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
                <?php
                    if ($totalcarrito > 0){
                        echo "<form action='carro.php' method='post'>
                                <button type='submit' class='button'>comprar</button>
                            </form>";
                    }
                ?>
            </th>
        </tr>
    </tfoot>
</table>