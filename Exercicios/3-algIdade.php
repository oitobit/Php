<?php

/*
Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.
 */

$nome = "Carla";
$sexo = "Feminino";
$idade = 20;

if (strcasecmp($sexo, $sexo) == 0 and $idade < 25) {
    echo $nome. ", Aceita";

}

else {
    echo $nome. ", Nao aceita";
}

?>