<?php

$conexion = mysqli_connect('localhost', 'root', '', 'mymovie');

if (!$conexion) {
    echo 'Error al conectar a la base de datos';
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO usuario (nombre, email, password) VALUES ('$nombre', '$email', MD5('$password'))";
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar";
}
