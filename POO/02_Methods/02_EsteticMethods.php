<?php

class iTerface
{

    public static function texto()
    {
        $i = 12;
        if ($i> 10 && $i <15)
        {
            echo "valor de " .$i. " é maior que 10 e menor que 15";
        }

    }

}

iTerface::texto();

?>