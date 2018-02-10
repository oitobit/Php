<?php

spl_autoload_register(function($myClass){

    include $myClass . ".php";

});

$class1 = new ClassesObjetos();
$class2 = new ClassesPropriedades();

?>

