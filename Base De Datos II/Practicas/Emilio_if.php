<!DOCTYPE php>
<html lang="Sp">

<head>
    <meta charset="utf-8">
    <title>IF</title>
</head>

<body>
    <?php
    $sexo = "F";
    $nombre = "Ana";
    if ($sexo == "F") {
        $saludo = "Bienvenida, ";
    } else {
        $saludo = "Bienvenido, ";
    }
    $saludo = $saludo . $nombre;
    print($saludo);
    ?>
</body>

</html>
