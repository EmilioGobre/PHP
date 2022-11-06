<!DOCTYPE php>
<html lang="Sp">

<head>
    <meta charset="utf-8">
    <title>Case</title>
</head>

<body>
    <?php
    $extension = "HTML";
    switch ($extension) {
        case ("PDF"):
            $tipo = "Documento Adobe PDF";
            break;
        case ("TXT"):
            $tipo = "Documento de texto";
            break;
        case ("HTML"):
            $tipo = "Documento HTML";
            break;
        case ("HTM"):
            $tipo = "Documento HTM";
            break;
        default:
            $tipo = "Archivo " . $extension;
    }
    print($tipo);
    ?>
</body>

</html>
