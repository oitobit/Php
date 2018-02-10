<?php

class Pai {

    private $dna;
    private $nome;
    public $fortuna;

    public function getDNA()
    {
        $this->dna;
    }

    public function setDNA($dna)
    {
        $this->dna = $dna;
    }

    public function getNome()
    {
        $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

   

}

class Filha extends Pai {

    public function exibirTela()
    {
        return array(
            "dna" => $this->getDNA(),
            "nome" => $this->getNome()
        );
    }

}

$r = new Pai();
$r->setDNA("Tudo");
$r->setNome("Paulo Jr");
var_dump($r->exibirTela());

?>