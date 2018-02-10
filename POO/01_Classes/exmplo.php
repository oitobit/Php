<?php

class Pessoa {
    public $name;

    public function falar(){
        return "Meu nom é ".$this->name;
    }
}
$rodrigo = new Pessoa();
$rodrigo->name = "Rodrigo";
echo $rodrigo->falar();

?>