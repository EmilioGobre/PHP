<?php

$conexion = mysqli_connect('localhost', 'root', '', 'mymovie');
if (!$conexion) {
    echo 'Error al conectar a la base de datos';
}

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM usuario WHERE email='$email' AND password='$password'";
$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) > 0) {
    echo "Login exitoso";
} else {
    echo "Error al iniciar sesión";
}
