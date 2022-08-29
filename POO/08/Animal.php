<?php

    abstract class Animal{
        protected $peso;
        protected $idade;
        protected $membros;
        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();

        # Getters e Setters
        # Peso
        public function getPeso(){
            return $this->peso;
        }
        public function setPeso($p){
            $this->peso = $p;
        }

        # idade
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($i){
            $this->idade = $i;
        }

         # membros
         public function getMembros(){
            return $this->membros;
        }
        public function setMembros($m){
            $this->membros = $m;
        }
    }  
?>