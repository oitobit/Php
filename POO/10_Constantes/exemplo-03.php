<?php

class myClass {
    const constant = "Qualquer valor";

    function mostrarConstante () {
        echo self::constant . "\n";
    }

}

$class = new myClass;
$class->mostrarConstante();

?>