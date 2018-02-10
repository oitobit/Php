<?php
echo "<h2>1. Working with String</h2>";
$text = '   How can a clam cram in a clean cream can? ';

echo strlen($text); //equals the 45
$text = trim($text); //This functions return a string, removing all spaces blank to the left and to the right.
echo strtoupper($text); //Return string with all alphapetic characters converted to uppercase. HOW CAN A CLAM CRAM IN A CLEAN CREAM CAN?
echo strtolower($text);//Return string with all alphabetic characters converted to lowercase. how can a clam cram in a clean cream can? 
$text = str_replace('H', 'r', $text);
echo $text;
echo substr($text, 2, 6); // w coul
var_dump(strpos($text, 'can')); // false
var_dump(strpos($text, 'could')); // 4

/*
In the preceding long piece of code, we are playing with a string with different
functions:
    • strlen: This function returns the number of characters that the string
    contains.
    • trim: This function returns the string, removing all the blank spaces to the
    left and to the right.
    • strtoupper and strtolower: These functions return the string with all the
    characters in upper or lower case respectively.
    • str_replace: This function replaces all occurrences of a given string by the
    replacement string.
    • substr: This function extracts the string contained between the positions
    specified by parameters, with the first character being at position 0.
    • strpos: This function shows the position of the first occurrence of the given
    string. It returns false if the string cannot be found
 */
?>