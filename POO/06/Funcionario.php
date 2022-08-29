<?php

    require_once 'Pessoa.php';
    class Funcionario extends Pessoa{

        private $setor;
        private $trabalhando;

        public function mudarTrabalho(){
            $this->setTrabalhando(!$this->getTrabalhando());
        } 

        # Getters e Setters
        # Setor
        public function getSetor(){
            return $this->setor;
        }
        public function setSetor($s){
            $this->setor = $s;
        }

        # Trabalhando
        public function getTrabalhando(){
            return $this->trabalhando;
        }
        public function setTrabalhando($t){
            $this->trabalhando = $t;
        }
    }  



?>