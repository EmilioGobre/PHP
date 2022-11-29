<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
    <div class="title">
        <h1>Productos</h1>
    </div>
    <div class="container-lista">
        <ul class="lista">
            <li class="elemento1"><a href="Agregar_pro.html">Agregar Producto</a></li>
            <li class="elemento2"><a href="Eliminar_pro.html">Eliminar Producto</a></li>
            <li class="elemento3"><a href="modify_pro_page.html">Modificar Producto</a></li>
        </ul>
        <div>
            <table>
                <tr>
                    <th>Codigo de Producto</th>
                    <th>Nombre</th>
                    <th>Precio de Compra</th>
                    <th>Precio de Venta</th>
                    <th>Proveedor</th>
                    <th>Cantidad</th>
                    <th>Vendedor</th>
                </tr>
                <?php
                include("db.php");
                $query = "SELECT * FROM producto";
                $result = mysqli_query($conexion, $query);
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                        <td><?php echo $row['codigo_producto'] ?></td>
                        <td><?php echo $row['nombre_producto'] ?></td>
                        <td><?php echo $row['precio_compra'] ?></td>
                        <td><?php echo $row['precio_venta'] ?></td>
                        <td><?php echo $row['proveedor'] ?></td>
                        <td><?php echo $row['cantidad'] ?></td>
                        <td><?php echo $row['Vendedor'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>