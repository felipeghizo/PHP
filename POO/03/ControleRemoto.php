<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    public function ControleRemoto(){
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    # Sobrescrevendo métodos
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }

    public function abrirMenu(){
        echo "<br>Esta ligado?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Esta tocando?: " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i += 10){
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "<br>Fechando menu...";
    }

    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ligarMudo(){
        if ($this->getLigado() and $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() and $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }

    public function play(){
        if ($this->getLigado() and !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getLigado() and $this->getTocando()){
            $this->setTocando(false);
        }
    }

    # volume
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($v){
        $this->volume = $v;
    }

    # ligado
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($p){
        $this->ligado = $p;
    }

    # tocando
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($t){
        $this->tocando = $t;
    }

}
?>