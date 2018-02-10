<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Construct</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="panel">Curso Php</div>
    <div id="area-trabalho">
        <pre>
            
        <?php

        class Book {

            public $isbn;
            public $title;
            public $author;
            public $available;

            public function __construct(int $isbn, string $title, string $author, int $available){

                $this->isbn = $isbn;
                $this->title = $title;
                $this->author = $author;
                $this->available = $available;

            }
        }

        $newBook = new Book("1984", "Rodrigo", "123456789", "12");
    

        ?>

        </pre>
    </div>
</body>
</html>