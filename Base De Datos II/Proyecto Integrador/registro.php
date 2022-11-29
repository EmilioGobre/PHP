<?php
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$puesto = $_POST['puesto'];
$sexo = $_POST['sexo'];
$celular = $_POST['celular'];
$password = $_POST['password'];


include("db.php");


$agregar_usu = "Insert into empleado (clave, nombre, apellidos, puesto, sexo,
celular,password) values ($codigo, '$nombre', '$apellido', '$puesto', '$sexo', $celular,MD5('$password'))";
$resultado = mysqli_query($conexion, $agregar_usu);

if ($resultado) {
    header("location:registro.html");
?>
    <div class="correct">Esta correcto</div>
<?php
} else {
    include("registro.html");
?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>