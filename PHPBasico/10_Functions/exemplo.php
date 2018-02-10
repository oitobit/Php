<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="panel">Curso PHP Básico</div>
    <div id="area-trabalho">
        <pre>
            <?php

            echo "<br>";

            function somar($n1 = 10, $n2 = 30, $n3 = 40, $n4 = 100) {
                return $n1 + $n2 + $n3 + $n4;
            }

            echo "Valor da soma de n1, n2, n3 e n4 é igual a " . somar() . ".";

            ?>
        </pre>
    </div>
</body>
</html>