<?php

echo "<h2>Funções Argumentos</h2>";

function funcUsuario() {
    return "Mnha função";
}

echo funcUsuario();
echo "<br>";

echo "<h2>Parâmetros de funções</h2>";
function arg($texto = "mundo", $numero) {
    return "$texto $numero<br>";
}

echo arg("Rodrigo","Sousa de França");
echo arg("Jose","Ferreira Silva");
echo arg("Leonardo", "Silva Gonçalves");

?>
