<?php
$codigo = $_POST['codigo_pro'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio_com'];
$precio_venta = $_POST['precio_vent'];
$codigo_proveedor = $_POST['cod_prov'];
$cantidad = $_POST['cant'];
$vendedor = $_POST['vend'];

include("db.php");

$agregar_pro = "Insert into producto (codigo_producto, nombre_producto, precio_compra, precio_venta, proveedor,
cantidad, Vendedor) values ('$codigo','$nombre','$precio','$precio_venta','$codigo_proveedor','$cantidad','$vendedor')";
$resultado = mysqli_query($conexion, $agregar_pro);

if ($resultado) {
    header("location:productos.php");
?>
    <div class="correct"></div>
<?php
} else {
    include("Agregar_pro.html");
?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>