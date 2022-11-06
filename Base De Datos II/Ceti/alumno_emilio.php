<!DOCTYPE php>
<html lang="Sp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alumno</title>
</head>

<body>
    <h1 class="Titulo">Registrado correctamente</h1>
    <?php

    $conexion = mysqli_connect("localhost", "root", "")
        or die("¡¡¡ERROR!!!");
    $db = mysqli_select_db($conexion, "ceti")
        or die("¡¡¡ERROR!!!");
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $nacimiento = $_REQUEST['nacimiento'];
    $sexo = $_REQUEST['sexo'];
    $registro = $_REQUEST['registro'];
    $municipio = $_REQUEST['municipio'];
    $carrera = $_REQUEST['carrera'];
    $celular = $_REQUEST['celular'];
    $domicilio = $_REQUEST['domicilio'];
    $colonia = $_REQUEST['colonia'];
    $hobby = $_REQUEST['hobby'];


    $llenado = "INSERT INTO alumno VALUES
    ($registro,$municipio,$carrera,'$nombre','$apellido','$nacimiento','$sexo',$celular,'$domicilio','$colonia');";
    $resultado = mysqli_query($conexion, $llenado)
        or die("!!!ERROR¡¡¡");
    ?>
</body>

</html>