<?php

    abstract class Pessoa{

        private $nome;
        private $idade;
        private $sexo;
        private $experiencia;

        public function __construct($nome, $idade, $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->experiencia = 0;
        }

        public function ganhaExperiencia($n){
            $this->setExperiencia($this->getExperiencia() + $n);
        }

        # Getter e Setters
        # nome
        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
        }

        # idade
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($i){
            $this->idade = $i;
        }

        # sexo
        public function getSexo(){
            return $this->sexo;
        }
        public function setSexo($s){
            $this->sexo = $s;
        }

        # experiencia
        public function getExperiencia(){
            return $this->experiencia;
        }
        public function setExperiencia($e){
            $this->experiencia = $e;
        }

   
    }

?>