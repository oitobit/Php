<?php

/*
Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.
*/

$n1 = 10;
$n2 = 8;
$soma = $n1 + $n2;

if ($soma > 20) {
    echo $soma + 8;
}

else if ($soma <= 20){
    echo $soma - 5;
}

?>