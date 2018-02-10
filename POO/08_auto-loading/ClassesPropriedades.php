<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes e Objetos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="panel">Curso PHP - POO</div>
    <div id="area-trabalho">
        <pre>

            <?php

            echo "<br>";
            class Book // a class is defined by keyword "class" folling of a wrod validad;
            {
                //keyword "public" represent an properties public.
                public $isbn; 
                public $title;
                public $author;
                public $available;

            }

            $book = new Book();//intance a class book;

            //assign values the properties(atributes).
            $book->isbn = 123456789;
            $book->title = "1984";
            $book->author = "George Orwell";
            $book->available = true;
            var_dump($book);
            #print_r($book);//printhing a value of each propertties

            echo "<br>";

            $book1 = new Book();
            $book1->title = "1984";
            $book2 = new Book();
            $book2->title = "To Kill a Mockingbird";
            #var_dump($book1, $book2);
            var_dump($book1);
            echo "<br>";
            var_dump($book2);

            ?>

        </pre>
    </div>
</body>
</html>
