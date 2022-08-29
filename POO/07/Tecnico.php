<?php

    require_once 'Aluno.php';
    class Tecnico extends Aluno{
        private $registroProfissional;

        public function praticar(){
            echo $this->getNome() . " esta praticando!";
        }

        # Getters e Setters
        # Bolsa
        public function getRegistroProfissional(){
            return $this->registroProfissional;
        }
        public function setRegistroProfissional($rp){
            $this->registroProfissional = $rp;
        }
    }
?>