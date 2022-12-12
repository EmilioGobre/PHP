<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $horario = $_POST['horario'];
    $tickets = $_POST['tickets_disponibles'];
    $precio = $_POST['precio'];
    $clasificacion = $_POST['clasificacion'];

    $tcks = (float)$tickets;
    $prc = (float)$precio;

    $sql = "UPDATE peliculas SET name='$name', horario='$horario', tickets_disponibles=
    '$tcks', precio='$prc', clasificacion='$clasificacion' WHERE name='$name'";

    if ($conexion->query($sql) === true) {
        echo "Pelicula Modificada Correctamente";
    } else {
        echo "Error: " . $conexion->error;
    }
    $conexion->close();
}
