<?php

echo "<h2>Operadores de Comparação</h2>";

$a = 10;
$b = 2;

var_dump($a > $b);//true
echo "<br>";

var_dump($a < $b);//false
echo "<br>";

var_dump($a >= $a);//true
echo "<br>";

var_dump($b <= $b);//true
echo "<br>";

var_dump($a == $b);//false
echo "<br>";

var_dump($a != $b);//true
echo "<br>";

var_dump($a !== $b);//true
echo "<br>";

var_dump($a === $b);//false
echo "<br>";

var_dump($a <> $b);//true
echo "<br>";

var_dump($a <=> $b);//1
echo "<br>";

?>
