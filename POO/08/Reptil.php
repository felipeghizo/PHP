<?php
    require_once 'Animal.php';
    class Reptil extends Animal{

        private $corEscama;

        public function locomover(){
            echo "<p> Rastejando </p>";
        }
        public function alimentar(){
            echo "<p> Comendo vegetais </p>";
        }
        public function emitirSom(){
            echo "<p> Som de réptil </p>";
        }

        # Getters e Setters
        # corEscama
        public function getCorEscama(){
            return $this->corEscama;
        }
        public function setCorEscama($ce){
            $this->corEscama = $ce;
        }

    }

?>