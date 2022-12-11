<?php
include 'conexion.php';
$nom = $_GET['name'];

$consulta = "SELECT * FROM peliculas WHERE name='$nom'";
$result = $conexion->query($consulta);
$datos = array();

if ($result) {
    while ($row = $result->fetch_array()) {
        $name = $row['name'];
        $horario = $row['horario'];
        $tickets_dis = $row['tickets_disponibles'];
        $precio = $row['precio'];
        $clasificacion = $row['clasificacion'];
        $datos[] = array(
            'name' => $name, 'horario' => $horario, 'tickets_disponibles' => $tickets_dis,
            'precio' => $precio, 'clasificacion' => $clasificacion
        );
    }
}
    $recordsFiltered = count($datos);
    $recordsTotal = $recordsFiltered;

header('Content-Type: application/json');

echo json_encode($datos);
$result->close();
