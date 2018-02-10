<?php
echo "<h2>Switch...case</h2>";

switch ($title) {
    case 'Harry Potter' :
        echo "Nice story, a bit too long.";
        break;
    case 'Lord of the Rings' :
        echo "A classic!";
        break;
    default :
        echo "Dunno that one.";
        break;
}

$title = 'Twilight';
switch ($title) {
    case 'Harry Potter' :
        echo "Nice story, a bit too long.";
    case 'Twilight' :
        echo 'Uh...';
    case 'Lord of the Rings' :
        echo "A classic!";
    default :
        echo "Dunno that one.";
}

$title = 'Twilight';
switch ($title) {
    case 'Harry Potter' :
        echo "Nice story, a bit too long.";
    case 'Twilight' :
        echo 'Uh...';
    case 'Lord of the Rings' :
        echo "A classic!";
    default :
        echo "Dunno that one.";
}