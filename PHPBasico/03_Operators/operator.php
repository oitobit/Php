<?php

echo "<h2>Operadores de Atribuição</h2><br>";
$a = ($b = 4) + 5;
echo $a . " o valor de a é igual a 9";
echo "<br>";
var_dump($a);

/*
Além do opeador básico de atribuição, temos o operador de combinação, que nos permite combinar valores de uma expressão.
*/
$a1 = 3; #Mesma coisa que a expressão $a1 = $a1 + $a1;
$a1 += 5;
echo $a1;

$valorTotal = 0;
$valorTotal += 100;
$valorTotal += 25;
$valorTotal -= 15;
echo "<br>";
echo $valorTotal;

$b1 = 3;
$b2 = &$b1; #mesma coisa que $b2 = $b1;
echo "<br>";
print($b2);

echo "<h2>Opeadores Aritméticos</h2>";
$ab = 10;
$cd = 2;

echo $ab + $cd;
echo "<br>";

echo $ab - $cd;
echo "<br>";

echo $ab * $cd;
echo "<br>";

echo $ab / $cd;
echo "<br>";

echo $ab % $cd;
echo "<br>";

echo $ab ** $cd; #mesma coisa que 10! 10*10;
echo "<br>";

echo 5 ** 3; #outra exponenciação
echo "<br>";

/*
Abaixo veremos operadores de identidade e negação
*/

echo -$ab;#negando minha variavel
echo "<br>";

echo +$ab;#converte de int para float
echo "<br>";
?>