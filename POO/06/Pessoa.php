<?php

    class Pessoa{

        private $nome;
        private $sexo;
        private $idade;

        public function fazerAniv(){
            $this->setIdade($this->getIdade() + 1);
        }

        # Getters e Setters
        # Nome
        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }

        # Sexo
        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($s){
            $this->sexo = $s;
        }

        # Idade
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($i){
            $this->idade = $i;
        }
    }

?>