<?php
$codigo = $_POST['codigo_mod'];
$code = $_POST['codigo_pro'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio_com'];
$precio_venta = $_POST['precio_vent'];
$codigo_proveedor = $_POST['cod_prov'];
$cantidad = $_POST['cant'];
$vendedor = $_POST['vend'];

include("db.php");

$query = "SELECT * FROM producto WHERE codigo_producto = $codigo";
if ($code == '') {
    $code = 'codigo_producto';
} elseif ($nombre == '') {
    $nombre = 'nombre_producto';
} elseif ($precio == '') {
    $precio = 'precio_compra';
} elseif ($precio_venta == '') {
    $precio_venta = 'precio_venta';
} elseif ($codigo_proveedor == '') {
    $codigo_proveedor = 'proveedor';
} elseif ($cantidad == '') {
    $cantidad = 'cantidad';
} elseif ($vendedor == '') {
    $vendedor = 'Vendedor';
}
$cascade = "SET FOREIGN NULL=True";
$update_pro = "UPDATE producto SET codigo_producto = '$code', nombre_producto = '$nombre',
precio_compra = '$precio', precio_venta = '$precio_venta', proveedor = '$codigo_proveedor',
cantidad = '$cantidad', Vendedor = '$vendedor' WHERE codigo_producto = '$codigo'";
$resultado = mysqli_query($conexion, $update_pro);

if ($resultado) {
    header("location:productos.php");
?>
    <div class="correct">Datos modificados Correctamente</div>
<?php
} else {
    include("modify_pro_page_pro.html");
?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
?>