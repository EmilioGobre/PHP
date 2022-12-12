<?php
include "conexion.php";
$nom = $_POST['name'];

$consulta = "DELETE FROM peliculas WHERE name='$nom'";

if ($conexion->query($consulta) === true) {
    echo "Pelicula eliminada";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
