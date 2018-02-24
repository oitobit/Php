<?php

//other character like: "/",".","-" can also be insert between for additional information.
/*
represent letter:
d = day;
m = month;
y = year;
l = lowercase.
*/

echo date("D/M/Y") . "<br>";
echo date("D-M-Y") . "<br>";
echo date("D.M.Y"). "<br>";
echo date("l") . "<br>";

/*
represent letter:
h = hour;
i = minutes;
s = second;
a = lowercase(am/pm).
*/

$time = date("h:i:s:a");
echo "<b style='color:crimson;'>$time</b>";
?>