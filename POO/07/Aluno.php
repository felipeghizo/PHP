<?php

    require_once 'Pessoa.php';
    class Aluno extends Pessoa{

        private $matr;
        private $curso;

        public function cancelarMatr(){
            echo "Matricula será cancelada!";
        }
        
        public function pagarMensalidade(){
            echo "Pagando mensalidade do aluno: " . $this->getNome();
        }
        # Getters e Setters
        # Matricula
        public function getMatr(){
            return $this->matr;
        }
        public function setMatr($m){
            $this->matr = $m;
        }

        # Curso
        public function getCurso(){
            return $this->curso;
        }
        public function setCurso($c){
            $this->curso = $c;
        }
    }  



?>