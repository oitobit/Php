<?php

class Carro {//classe Carro

    //atributos com visibilidade privada
    private $modelo;
    private $ano;
    private $motor;

    public function getModelo (){//getModelo é um metodo
        return $this->modelo; //retorna o valor do meu atributo
    }

    public function setModelo ($modelo){//setModelo é um metodo
        $this->modelo = $modelo;//faz referencia ao meu atributo, atributo esse que recebe minha variavel $modelo
    }

    public function getAno ():int{//getAno é um metodo
        return $this->ano;//retorna o valor do meu atributo
    }

    public function setAno ($ano) {//setAno é um metodo
        $this->ano = $ano;//faz referencia ao meu atributo, atributo esse que recebe minha vairiavel $ano
    }

    public function getMotor ():float {//getMotor é um metodo
        return $this->motor;//retorna o valor do meu atributo
    }

    public function setMotor($motor) {//setMotor é um metodo
        $this->motor = $motor;//faz referencia ao meu atributo, atributo esse que recebe minha variavel $motor
    }

    public function exibir (){//função
        
        //retorna um array
        return array (

            //fazendo referencia do meu metodo para o meu atributo
            "modelo" => $this->getModelo(), 
            "ano" => $this->getAno(),
            "motor" => $this->getMotor()
        );
    }
}

//instanciando minha classe com a variavel $gol
$gol = new Carro();

//atribuindo valores aos meus atributos com visibilidade privada, utlizando metodo setModelo, setAno, setMotor.
$gol->setModelo("Gol gt");
$gol->setAno("1990");
$gol->setMotor("1.5");

//imprimindo os valores da minha Função utilizando minha instancia.
var_dump($gol->exibir());

?>