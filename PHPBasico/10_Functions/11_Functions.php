<?php

//primeiro exemplo de uma função de usuário
function sum () {
    return "oi";
}
echo sum();
echo "<br>";

//segundo exemplo de uma função de usuário
function addNumber($a, $b) {
    $soma = $a + $b;
    return $soma;
}
$resultado = addNumber(2, 3);
echo $resultado;

?>