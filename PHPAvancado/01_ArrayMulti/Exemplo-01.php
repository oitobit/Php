<?php

$cars = array(
    array("Fiesta", 12, 10),
    array("Fiat", 17, 15),
    array("Gol", 5, 8),
    array("Corola", 20, 22)
);

for($model = 0; $model < 4; $model++){
    echo "<p><b> model of carro $model </b></p>";
    echo "<ul>";

for($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$model][$col]."</li>";
    }
    echo "</ul>";
}

?>