<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div id="panel">Curso PHP Básico</div>
    <div id="area-trabalho">
    <pre>
        
    <?php

    #include "include.php";

    require_once "include.php";
    require_once "include.php";

    $res = somar(10, 20);

    echo $res;

    ?>

    </pre>
    </div>
</body>
</html>

