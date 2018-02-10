<?php

class Carro {
    public $name;
    public $modelo;
    public $pneu;

    public function espec () {
        return $this->name ." ".$this->modelo . " ". $this->pneu;
    }
}

$instance = new Carro();

$instance->name = "Fiat";
$instance->modelo = 2007;
$instance->pneu = "rotatorio";

echo $instance->espec();

?>