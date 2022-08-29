<?php
    require_once 'Lutador.php';
    class Luta{

        private $desafiante;
        private $desafiado;
        private $rounds;
        private $aprovada; 

        public function marcarLuta($l1, $l2){
            if (($l1->getCategoria() === $l2->getCategoria()) and ($l1 != $l2)){
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            } else {
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }

        public function lutar(){
            if ($this->getAprovada()){
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0: # Empate.
                        echo "Empate!";
                        $this->getDesafiado()->empatarLuta();
                        $this->getDesafiante()->empatarLuta();
                        break;
                    case 1: # Desafiado vence.
                        echo "O " . $this->getDesafiado()->getNome() . " Venceu!";
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        break;
                    case 2: # Desafiante vence.
                        echo "O " . $this->getDesafiante()->getNome() . " Venceu!";
                        $this->getDesafiante()->ganharLuta();
                        $this->getDesafiado()->perderLuta();
                        break;
                }
            } else {
                echo "A luta não pode acontecer!";
            }
        }

        # getter e setters
        # Desafiante
        public function getDesafiante(){
            return $this->desafiante;
        }
        public function setDesafiante($d){
            $this->desafiante = $d;
        }

        # Desafiado
        public function getDesafiado(){
            return $this->desafiado;
        }
        public function setDesafiado($d){
            $this->desafiado = $d;
        }
       
        # Rounds
        public function getRounds(){
            return $this->rounds;
        }
        public function setRounds($r){
            $this->rounds = $r;
        }

        # Aprovada
        public function getAprovada(){
            return $this->aprovada;
        }
        public function setAprovada($a){
            $this->aprovada = $a;
        }

    }

?>