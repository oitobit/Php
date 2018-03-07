<?php

$myFile = fopen("webdicionary.txt", "r") or die ("Não foi possível abrir o arquivo");

echo fread($myFile, filesize("webdicionary.txt"));

fclose($myFile);

?>