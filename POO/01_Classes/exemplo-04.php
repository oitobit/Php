<?php

class Pessoa{

    private $olhos;
    private $altura;

    public function getOlhos(){
        return $this->olhos;
    }

    public function setOlhos($Olhos) {
        $this->olhos = $Olhos;
    }

    public function getAltura ():float{
        return $this->altura;
    }

    public function setAltura ($Altura) {
        $this->altura = $Altura;
    }

    public function mostrar(){
        return array (

            "olhos" => $this->getOlhos(),
            "altura"=> $this->getAltura()

        );
    }

}

$rodrigo = new Pessoa();
$rodrigo->setOlhos("medio");
$rodrigo->setAltura("1.75");

var_dump($rodrigo->mostrar());

?>