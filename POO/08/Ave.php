<?php
    require_once 'Animal.php';
    class Ave extends Animal{

        private $corPena;

        public function locomover(){
            echo "<p> Voando </p>";
        }
        public function alimentar(){
            echo "<p> Comendo sementes </p>";
        }
        public function emitirSom(){
            echo "<p> Som de ave </p>";
        }
        public function fazerNinho(){
            echo "<p> Construiu um ninho </p>";
        }

        # Getters e Setters
        # corPena
        public function getCorPena(){
            return $this->corPena;
        }
        public function setCorPena($cp){
            $this->corPena = $cp;
        }

    }

?>