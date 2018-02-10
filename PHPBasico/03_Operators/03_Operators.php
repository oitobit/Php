<?php
//Arithmetic Operators
echo "<h1>Arithmetic Operators</h1>";
$a = 10;
$b = 3;

var_dump($a + $b, "<br>"); //value equals the 13:addition
var_dump($a - $b, "<br>"); //value equals the 7: subtraction
var_dump($a * $b, "<br>"); //value equals the 30: multiplication
var_dump($a / $b, "<br>"); //value equals the 3.333: division
var_dump($a % $b, "<br>"); //value equals the 1: modulo
var_dump($a ** $b, "<br>"); //vaule equals the 1000: exponetiation
var_dump(-$a, "<br>"); //value equals the -10: negation
echo "As you can see, they are quite easy to understand!";
/*
1. first operation sum value of variables $a end $b
2. second operation subtration value of variables
3. thirt operation multiplication value of variables
4. forth operation dividion value of variables
5. fifth operatin rest of division of variables
6. sixth operation exponetiation of variables
7. senventh operation negation of variables
*/
echo "<h2>Assignments Operators</h2>";
$a = 3 + 4 + 5 - 2; //here the usingof of a series de operators arithmetics
var_dump($a); // equals10
/*
There are a series of assignment operators that work as shortcuts. You can build
them combining an arithmetic operator and the assignment operator. Let's see some
examples:
 */
 $a = 13;
 $a += 14; // same as $a = $a + 14
 var_dump($a);
 $a -= 2;
 var_dump($a); //same as $a = $a - 2;
 $a *= 4; // same as $a = $a * 4;
 var_dump($a);

 echo "<h2>Comparison operators</h2>";
 echo "<p>Comparison operators are one of the most used groups of operators. They take two operands and compare them, returning the result of the comparison usually as a Boolean, that is, true or false.</p>";
var_dump(2 < 3); // true
var_dump(3 < 3); // false
var_dump(3 <= 3); // true
var_dump(4 <= 3); // false
var_dump(2 > 3); // false
var_dump(3 >= 3); // true
var_dump(3 > 3); // false
var_dump(1 <=> 2); // int less than 0
var_dump(1 <=> 1); // 0
var_dump(3 <=> 2, "<br>"); // int greater than 0

$a = 3;
$b = '3';
$c = 5;

var_dump($a == $b); // true: Verdadeiro se $a for igual a $b
var_dump($a === $b); // false: Verdadeiro se $a for igual a $b e for do mesmo tipo
var_dump($a != $b); // false: Verdadeiro se $a não for igual a $b
var_dump($a !== $b); // true: Verdadeiro se $a não for igual a $b, ou eles não são do mesmo tipo
var_dump($a == $c); // false: Verdadeiro se $a for igual a $b
var_dump($a <> $c); // true: Verdadeiro se $a não for igual a $b

echo "<br><h2>Logical Operators</h2>";
/*
Logial Operators
simbbolos: 
&& corresponde a "and"
|| corresponde a "or"
! corresponde a "negação"
*/

var_dump(true && true);//true
var_dump(true && false);//false
var_dump(true || true);//true
var_dump(false || false);//false
var_dump(!false);//true

echo "<h2>Incrementing and decrementing operators</h2>";

$a = 3;
$b = $a++;
var_dump($a, $b);// $a is 4 and $b is 3
$b = ++$a;
var_dump($a, $b);// $a and $b are 5

/*
primeiro o operador atribuirá o valor da variável $a para $b, antes da incrementação. Depois incrementará +1 para variavél $a.
*/

echo "<h2>Operador Precedence</h2>";

$a = 1;
$b = 3;
$c = true;
$d = false;
$e = $a + $b > 5 || $c; // true
var_dump($e);
$f = $e == true && !$d; // true
var_dump($f);
$g = ($a + $b) * 2 + 3 * 4; // 20
var_dump($g);

