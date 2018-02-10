<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="panel">Curso Php</div>
    <div id="area-trabalho">
        <pre>
            <?php
            class Caneta
            {

                private $tampada;
                private $destampada;

                public function getTampada()
                {
                    return $this->tampada;
                }

                public function setTampada($Tampada)
                {
                    $this->tampada = $Tampada;
                }

                public function getDestampada()
                {
                    return $this->destampada;
                }

                public function setDestampada($Destampada)
                {
                    $this->destampada = $Destampada;
                }

                public function exibirTela()
                {

                    if ($this->tampada == true) {
                        echo "Caneta tá tampada";
                    } elseif ($this->destampada == true) {
                        echo "Caneta tá destampada";
                    } else {
                        echo "Não tem caneta";
                    }
                }
            }

            $resultado = new Caneta();
            $resultado->setTampada(false);
            $resultado->setDestampada(true);

            echo "<strong style=color:crimson;>";
            echo "<body style=background-color:floralwhite;>";
            echo "<br>";
            print_r($resultado->exibirTela());

            ?>
        </pre>
    </div>
</body>
</html>
