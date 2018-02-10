<?php

abstract class Animal {

    public function falar(){
        return "som";
    }

    public function andar(){
        return "move";
    }

}

class Cachorro extends Animal {

    public function falar(){
        return "late";
    }

    public function andar(){
        return "corre";
    }

}

class Gato extends Animal {

    public function falar(){
        return "mia";
    }

    public function andar(){
        return "devagar";
    }
}

class Passaro extends Animal {

    public function falar(){
        return "cantar";
    }

    public function mover() {
        return "voa e " . parent::mover();
    }

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->andar() . "<br>";

echo "-----------------------";

$garfield = new Gato();
echo $garfield->falar() . "<br>";
echo $garfield->andar() . "<br>";

echo "-----------------------";

$ave = new Passaro();
echo $ave->falar() . "<br>";
echo $ave->andar() . "<br>";

?>


