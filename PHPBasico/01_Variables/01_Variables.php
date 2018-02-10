<?php
    $a = 1;
    $b = 2;
    $c = $a + $b;
    //variables always start with simbols "$" followed of name of variable

    echo $c; //value will 3

    /*
    A valid variable name starts with a letter or an underscore followed by any combination of letters,
    numbers, and/or underscores. It is case sensitive. Let's see some examples:
    */
    $_some_value = 'abc'; // valid
    $ 1 number = 12.3; // not valid!
    $some $signs % = '&^%'; // not valid!
    $go_2_home = "ok"; // valid
    $go_2_Home = 'no'; // this is a different variable
    $isThisCamelCase = true; // camel case
    //Obs.: Remember that everything after "//" is a comment, and is thus ignored by PHP.

    /*
    In this piece of code, we can see that variable names like $_some_value and $go_2_ home are valid. $1number and $some$signs% are not valid as they start with a number, or they contain invalid symbols. As names are case sensitive, $go_2_home and $go_2_Home are two different variables. Finally, we show the CamelCase convention, which is the preferred option among most developers.
 */
?>