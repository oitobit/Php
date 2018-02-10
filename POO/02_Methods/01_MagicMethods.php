<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Methods</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="panel">Curso Php</div>
    <div id="area-trabalho">
    <pre>
        <?php
        
        class Endereco {

            private $logradouro;
            private $numero;
            private $cidade;

            public function __construct($a, $b, $c){
                $this->logradouro = $a;
                $this->numero = $b;
                $this->cidade = $c;
            }

            public function __toString(){
                return $this->logradouro . ", " . $this->numero . ", ". $this->cidade; 
            }
        }

        $meuEndereco = new Endereco("Rua Silvestre de Almeida", "154", "Várzea Pualista");

        echo "<br>";
        echo $meuEndereco;

        ?>
    </pre>
    </div>
</body>
</html>