<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $horario = $_POST['horario'];
    $tickets_disponibles = $_POST['tickets_disponibles'];
    $precio = $_POST['precio'];
    $clasificacion = $_POST['clasificacion'];
    $imagen = $_POST['imagen'];


    $tcks = (float)$tickets_disponibles;
    $prc = doubleval($precio);


    $path = "img/$name.png";
    $actualpath = "http://192.168.100.107/VSC%20PHP/Programacion%20Movil/MyMovie/$path";

    $sql = "INSERT INTO peliculas (name, horario, tickets_disponibles, precio, clasificacion, imagen)
    VALUES ('$name', '$horario', $tcks, $prc, '$clasificacion', '$actualpath')";
    echo "Pelicula insertada";

    if (mysqli_query($conexion, $sql)) {
        file_put_contents($path, base64_decode($imagen));
        echo "Pelicula insertada exitosamente";
    } else {
        echo "Error al insertar pelicula";
    }
}
