<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {
    public function acelerar($velocidade){
        echo "o veiculo acelerou até " . $velocidade . "km/h.";
    }
}

$carro = new Civic;
$carro->acelerar(1);

?>