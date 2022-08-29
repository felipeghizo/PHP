<?php

    class Pessoa {

        private $nome;
        private $idade;
        private $sexo;

        public function Pessoa($n, $i, $s){
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;
        }

        public function fazerAniver(){
            $this->setIdade($this->getIdade() + 1);
            echo "Parabéns, agr vc tem " . $this->getIdade() . " anos de vida!!!";
        }

        # getters e setters
        # Nome
        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }

        # Idade
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($i){
            $this->idade = $i;
        }

        #Sexo
        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($s){
            $this->sexo = $s;
        }
    }

?>