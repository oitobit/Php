<?php

class Rotatoria{
    public $direita;
    public $esquerda;
    public $continuar;
}

$definirRota = new Rotatoria();
$definirRota->direita = 0;
$definirRota->esquerda = 1;
$definirRota->continuar = 2;

if ($direita >= 1) {
    echo "Ir pra direita";
}

elseif ($esquerda >= 0) {
    echo "Ir pra esquerda";
}

elseif ($continuar >= 3) {
    echo "Seguir em frente";
}

else {
    echo "Ir pra lugar nenhum";
}

?>