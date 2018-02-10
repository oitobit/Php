<?php

class Pessoa {
    private $altura;
    private $idade;
    private $sexo;

    public function __construct($a, $b, $c){
        $this->altura = $a;
        $this->idade = $b;
        $this->sexo = $c;
    }

    public function __toString (){
        return $this->altura . ", " . $this->idade . ", " . $this->sexo . ".";
    }
}

$resultado = new Pessoa("1.75", "18", "Mas");

echo "<br>";
echo $resultado;

?>