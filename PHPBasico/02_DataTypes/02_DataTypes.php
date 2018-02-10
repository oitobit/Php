<?php
/*
We can assign more than just numbers to variables. PHP has eight primitive types,
but for now, we will focus on its four scalar types:
DataTypes:
    Booleans;
    Integers
    Float;
    Strings. 

Even though PHP defines these types, it allows the user to assign different types of
data to the same variable. Check the following code to see how it works:
 */

$number = 123;
var_dump($number);
$number = 'abc';
var_dump($number);

/*
The code first assigns the value 123 to the variable $number. As 123 is an integer,
the type of the variable will be integer int. That is what we see when printing the
content of the variable with var_dump. After that, we assign another value to the
same variable, this time a string. When printing the new content, we see that the type
of the variable changed from integer to string, yet PHP did not complain at any time.
This is called type juggling.
 */

 $a = "1";
 $b = 2;
 var_dump($a + $b); // 3
 var_dump($a . $b); // 12
 //The var_dump() function is used to display structured information (type and value) about one or more variables.
?>