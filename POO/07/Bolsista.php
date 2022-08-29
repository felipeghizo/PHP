<?php

    require_once 'Aluno.php';
    class Bolsista extends Aluno{
        private $bolsa;

        public function renovarBolsa(){
            echo "Bolsa renovada!";
        }

        public function pagarMensalidade(){
            echo $this->getNome() . " é bolsista, então ganha desconto!";
        }

        # Getters e Setters
        # Bolsa
        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($b){
            $this->bolsa = $b;
        }
    }
?>
