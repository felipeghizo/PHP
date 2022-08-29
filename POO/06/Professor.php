<?php

    require_once 'Pessoa.php';
    class Professor extends Pessoa{

        private $especialidade;
        private $salario;

        public function receberAumento($au){
            $this->setSalario($this->getSalario() + $au);
        }

        # Getters e Setters
        # Especialidade
        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function setEspecialidade($m){
            $this->especialidade = $m;
        }

        # Salario
        public function getSalario(){
            return $this->salario;
        }
        public function setSalario($s){
            $this->salario = $s;
        }
    }  



?>