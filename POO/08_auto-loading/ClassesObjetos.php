<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Caneta</title>
        <meta charset="utf-8">
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
                        return $this->Destampada;
                    }


                    public function setDestampada($Destampada)
                    {
                        $this->destampada = $Destampada;
                    }

                    public function exibirTela()
                    {
                        if ($this->tampada == true) {
                            echo "Caneta tampada";
                        } elseif ($this->destampada == true) {
                            echo "Caneta Destampada";
                        } else {
                            echo "Não tem caneta";
                        }
                    }
                }

                $resultado = new Caneta();
                $resultado->setTampada(false);
                $resultado->setDestampada(true);

                echo "<br>";
                echo "<strong style=color:crimson>";
                print_r($resultado->exibirTela());

                ?>

            </pre>
        </div>
    </body>
</html>