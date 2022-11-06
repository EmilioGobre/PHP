<!DOCTYPE php>
<html lang="Es">

<head>
    <meta charset="utf-8">
    <title>Func2</title>
</head>

<body>

    <?PHP
    function incrementa(&$a)
    {
        $a = $a + 1;
    }
    $a = 1;
    incrementa($a);
    print $a;
    ?>

</body>

</html>
