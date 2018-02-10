<?php
/*
Here have two types of date structures:
    1. List;
    2. Maps.

1. List are an ordered of set elements. Ex.:
    List: ["Harry", "Ron", "Hermione"]

2. Maps are an set fo elements identifid by keys. Ex.:
    Map: {
        "name": "Jones",
        "status": "dead"
    }

    Obs.: In PHP, we do not have lists and maps; we have arrays. An array is a data structure
that implements both, a list and a map.
 */
/*
Initializing arrays
You have different options for initializing an array. You can initialize an empty
array, or you can initialize an array with data. There are different ways of writing the
same data with arrays too. Let's see some examples:
 */
$empty1 = [];//array empty
$empty2 = array(); //function array
$names1 = ["Harry", "Ron", "Hermione"];//array with data
$names2 = array("Harry", "Ron", "Hermione");
$status1 = [
    'name' => 'Jones',
    'status' => 'dead'
];
$status2 = array(
    'name' => 'Jones',
    'status' => 'dead'
);

/*
Keys an of array can be any value alphanumeric, like strings and numbers. Value of an array can be anything, like: string, numbers, booleans e other arrays.
*/
$book = [
    '1984' => [
        'author' => 'George Orwell',
        'finished' => true,
        'rate' => 9.5
    ],
    'Romeo and Juliet' => [
        'author' => 'William Shakespeare',
        'finished' => false
    ]
];
/*
This array is a list that contains two arrays—maps. Each map contains different values like strings, doubles, and Booleans.
 */
$names = ['Harry', 'Ron', 'Hermione'];
$status = [
    'name' => 'Jones',
    'status' => 'dead'
];
$names[] = 'Joao';
$status['age'] = 32;
print_r($names, $status);

echo "\n<h2>Acessing Arrays</h2>";

$names = ["Harry", "Ron", "Hermione"];
$names['badguy'] = 'Voldemort';
$names[8] = 'Snape';
$names[] = 'McGonagall';

print_r($names);//print all value of variable $names.
print_r($names[1]); //print 'Ron'
var_dump($names[4]);// null and php in notice

echo "\n<h2>The empty and isset functions</h2>\n";
/*
There are two useful functions for enquiring about the content of an array. If you
want to know if an array contains any element at all, you can ask if it is empty with
the empty function. That function actually works with strings too, an empty string
being a string with no characters (' '). The isset function takes an array position, and
returns true or false depending on whether that position exists or not:
 */

$string = '';
$array = [];
$names = ['Harry', 'Ron', 'Hermione'];

var_dump(empty($string));//true
var_dump(empty($array));//true
var_dump(empty($names));//false
var_dump(isset($names[2]));//true
var_dump(isset($names[3]));//false

echo "\n<h2>Searching for elements in an array</h2>\n";

$names = ['Harry','Ron', 'Hermione'];

$names = ['Harry', 'Ron', 'Hermione'];
$containsHermione = in_array('Hermione', $names);
var_dump($containsHermione); //true
$containsSnape = in_array('Snape', $names);
var_dump($containsSnape); // false
$wheresRon = array_search('Ron', $names);
var_dump($wheresRon); // 1
$wheresVoldemort = array_search('Voldemort', $names);
var_dump($wheresVoldemort); //false
?>

