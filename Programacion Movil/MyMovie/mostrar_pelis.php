<?php
include 'conexion.php';
$consulta = "SELECT * FROM peliculas";
$resultado = mysqli_query($conexion, $consulta);
$datos = array();

if ($resultado) {
    while ($row = $resultado->fetch_array()) {
        $nombre = $row['name'];
        $horario = $row['horario'];
        $tickets_dis = $row['tickets_disponibles'];
        $precio = $row['precio'];
        $clasificacion = $row['clasificacion'];
        $imagen = $row['imagen'];
        $datos[] = array(
            'name' => $nombre, 'horario' => $horario,
            'tickets_disponibles' => $tickets_dis, 'precio' => $precio, 'clasificacion' => $clasificacion, 'imagen' => $imagen
        );
    }
}
$recordsFiltered = count($datos);
$recordsTotal = $recordsFiltered;

header('Content-Type: application/json');

echo json_encode($datos);
$resultado->close();
