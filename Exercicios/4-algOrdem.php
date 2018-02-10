<?php

/*
Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes).
*/

$decrescente = array("n1" => 2, "n2" => 6, "n3" => 8);

arsort($decrescente);

foreach ($decrescente as $chave => $valor) {
    echo "$chave = $valor\n";
}

?>