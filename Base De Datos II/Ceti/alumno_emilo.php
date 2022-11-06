<!DOCTYPE php>
<html lang="Sp">

<head>
    <meta charset="utf-8">
    <title>Dos</title>
</head>

<body>
    <?php

    $conexion = mysqli_connect("localhost", "root", "")
        or die("¡¡¡ERROR!!!");
    $db = mysqli_select_db($conexion, "ceti")
        or die("¡¡¡ERROR!!!");
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $sexo = $_REQUEST['sexo'];
    $registro = $_REQUEST['registro'];
    $municipio = $_REQUEST['municipio'];
    $carrera = $_REQUEST['carrera'];
    $celular = $_REQUEST['celular'];
    $domicilio = $_REQUEST['domicilio'];
    $colonia = $_REQUEST['colonia'];
    $hobby = $_REQUEST['hobby'];


    $llenado = "INSERT INTO alumno VALUES
    ($registro,$municipio,$carrera,'$nombre','$apellido','0000-00-00','$sexo',$celular,'$domicilio','$colonia');";
    $resultado = mysqli_query($conexion, $llenado)
        or die("!!!ERROR¡¡¡");
    ?>
</body>

</html>
