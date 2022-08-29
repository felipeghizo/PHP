<?php
class Caneta{
    var $modelo;
    var $cor;
    var $ponta;
    var $tampa = true;

    public function Caneta($m="BIC", $c="Azul", $p=0.5){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
    }

    public function tampar(){
        $this->tampa = true;
    }

    public function abrir(){
        $this->tampa = false;
    }

    private function setModelo($m){
        $this->modelo = $m;
    }

    public function getCor(){
        return $this->cor;
    }
}
?>