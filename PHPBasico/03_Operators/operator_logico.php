<?php

echo "<h2>Operadores lógicos</h2>";

$a = true;
$b = false;

var_dump($a and $b);//false
echo "<br>";

var_dump($a and $a);//true
echo "<br>";

var_dump($a or $b);//true
echo "<br>";

var_dump($b or $b);//false
echo "<br>";

var_dump($a xor $b)//true
echo "<br>";

$c = true && true;//true
echo $c;

$d = false || false;//false
echo $d;

echo "Os operadores lógicos '&& e ||' tem precedência maior que 'and e or'";

?>