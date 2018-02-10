<?php
//Control structure
for ($i=0/*atribuição*/; $i <= 10/*condição*/; $i++/*incrimentação*/){
    echo $i. "<br>";
}
echo "<br>";

$names = ['Rodrigo', 'Rafael', 'Jose'];
for ($a = 0; $a < count($names); $a++):
    echo $names[$a]. "<br>";
endfor;
echo "<br>";

for ($b = 10; $b >= 0; $b--){
    echo $b. "<br>";
}

?>