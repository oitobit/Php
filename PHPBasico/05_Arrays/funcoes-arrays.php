<?php

$pessoas = array(); //inicializando um array vazio

//array na posição 0
array_push($pessoas, array( //função push utlizada para adicionar elementos a um array.
    'Nome' => 'Rodrigo',
    'Idade' => 20
));

//array na posição 1
array_push($pessoas, array(
    'Nome' => 'Jose',
    'Idade' => 21
));

print_r($pessoas); //imprime todo array
echo "<br>";
print_r($pessoas[0]); //imprime o array na posição 0
echo "<br>";
print_r($pessoas[0]['Nome']); //imprime a posição e a chave do Nome, que é Rodrigo.
echo "<br>";
var_dump(empty($pessoas)); //verifica se o array é vazio, se vazio retornara verdadeiro; caso contrario falso.
echo "<br>";
var_dump(isset($pessoas)); //verifica se existe dados inseridos no array, caso não tenha dados inseridos retornara falso, caso contrario verdadeiro.
echo "<br>";

$names = array('Matheus', 'Henrique', 'Carlos');

$pesquisar = array_search('Henrique', $names);//array_search, função utilizada para encontrar um elmento dentro de um array, caso encontre retornara 1, caso contrario, retornara 0.
var_dump($pesquisar);

?>