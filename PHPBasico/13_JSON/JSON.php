<?php

$booksJson = file_get_contents('books.json');
$books = json_decode($booksJson, true);

var_dump($books);

?>