<?php

abstract class Template {

    abstract protected function pegarValor();
    abstract protected function valorPrefixo($prefixo);

    public function imprimir(){
        print $this->pegarValor();
    }

}

class iTemplate extends Template {
    public function pegarValor() {
        return "Itemplate";
    }
    public function valorComPrefixo($prefixo)
    {
        return "{$prefixo}iTemplate";
    }
}

?>