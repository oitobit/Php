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
            $a = 10; //variable scope

            function reference($a){
                $a += 50; //$a = $a + $a;
                return $a;
            }

            echo reference($a);
            echo "<br>";
            echo $a;

            ?>
        </pre>
    </div>
</body>
</html>