<?php
echo "<h2>1.Conditionals</h2>";
/*
A conditional valuate an expression boolean, that return values true or false. Too is of data structure. Executed something block of code that is true.
 */

 echo "\nBefore of conditional";
 if (4 > 3){
     echo "\nInside the conditional\n";
 }
 if (4 < 3) {
     echo "This will is not printed";
 }
 echo "\nAfter the conditional";

 /*
 In the preceding piece of code, we use two conditionals. A conditional is defined by the keyword if followed by a Boolean expression in parentheses and by a block of code. If the expression is true, it will execute the block, otherwise it will skip it.
 You can increase the power of conditionals by adding the keyword else. This tells PHP to execute some block of code if the previous conditions were not satisfied. Let's see an example:
 */

 if ( 2 > 3) {
     echo "\nInside the conditional.";
 }
 else {
     echo "\nInside the else.";
 }
 /*
 Finally, you can also add an elseif keyword followed by another condition and a block of code to continue asking PHP for more conditions. You can add as many elseif as you need after an if. If you add an else, it has to be the last one of the chain of conditions. Also keep in mind that as soon as PHP finds a condition that resolves to true, it will stop evaluating the rest of conditions.
 */
if (4 > 5) {
    echo "\nNot printed\n";
}
elseif (4 > 4) {
    echo "\nNot printed\n";
}
elseif (4 == 4) {
    echo "\nPrinted";
}
elseif (4 > 2) {
    echo "Not evaluated.";
}
else {
    echo "Not evaluated.";
}
if (4 == 4) {
    echo "Printed";
}

if ($a > $b) {
    echo "a maior do que b";
}

?>