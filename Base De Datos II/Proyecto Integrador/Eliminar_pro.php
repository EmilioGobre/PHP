<?php
$codigo = $_POST['codigo'];

include("db.php");

$delete_pro_pro = "Delete from proveedores where code_producto = '$codigo'";
$resultado = mysqli_query($conexion, $delete_pro_pro);
$delete_pro = "Delete from producto where codigo_producto = '$codigo'";
$resultado = mysqli_query($conexion, $delete_pro);



if ($resultado) {
    header("location:productos.php");
?>
    <div class="correct"></div>
<?php
} else {
    include("Eliminar_pro.html");
?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>