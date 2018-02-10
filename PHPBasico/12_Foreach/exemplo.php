<?php

$colecao = array (
    "0" => "30",
    "1" => "2",
    "3" => "10",
    "9" => "-12"

);
asort($colecao);

foreach ($colecao as $key => $value){
    echo "$key = $value\n";
}

$mult = array(2, 3, 6, 10);

foreach($somar as &$valeu){
   $value = value * 2;
}
unset($value);
?>