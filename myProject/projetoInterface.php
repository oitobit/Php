<?php

namespace Exercicio;

interface quebraLinha {

    public function texto($text);
    public function tamanho($length);

}

 class iTerface {
 
    public static function texto():string{

        echo $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultrices nunc lectus,non rhoncus nisi viverra porttitor. Quisque tempus aliquam pharetra. Maecenas eu dolor ac augue mollis maximus sed vel ante. Donec tellus lorem, hendrerit vel convallis eu, vulputate nec urna. In pellentesque posuere quam, a elementum sem. Nam porta.";

    }

    public function tamanho():int {

        echo $length = wordwrap($text, 20);
        
    }
    
}

iTerface::texto();
iTerface::tamanho();

//$className = new iTerface();
//$className->texto($text);

?>

