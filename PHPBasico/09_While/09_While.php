<?php
echo "<h1>Loops</h1><br>";
/*
Loops are control structures that allow you to execute certain statements several times, as many times as you need. You might use them in several different scenarios, but the most common one is when interacting with arrays. For example, imagine you have an array with elements, but you do not know what is in it. You want to print all its elements, so you loop through all of them. There are four types of loops. Each of them has its own use cases, but in general, you can transform one type of loop into another. Let's look at them closely.
 */

echo "<h2>While</h2>";
/*
O propósito da declaração while é simples. Ele dirá ao PHP para executar as declarações aninhadas repetidamente, enquanto a expressão do while forem avaliadas como TRUE. O valor da expressão é checado a cada vez que o laço é iniciado, então, mesmo seu valor mude durante a execução das declarações aninhadas, a execução não será interrompida até o final da iteração ( cada vez que o PHP executa as declarações dentro do laço é uma iteração). Entretanto, se a expressão do while for avaliada como FALSE desde o início, as declarações aninhadas não serão executadas nenhuma vez.
 */

echo "<h2>Exemplo1</h2>";
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

echo "<h2>Exemplo2</h2>";
$i = 3;
while ($i <= 12):
    echo $i;//ficará no laço, irar contar repetidamente/infinitamente o valor da variável de $i.
    $i = 1;
endwhile;

?>