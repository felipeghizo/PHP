<?php

    require_once 'Video.php';
    require_once 'Gafanhoto.php';
    
    class Visualizacao {
        private $espectador;
        private $filme;

        public function __construct($espectador, $filme){
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        }

        public function avaliar(){
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorc($porc){
            $nova = 0;
            if ($porc <= 25){
                $nova = 2;
            } else if ($porc <= 50){
                $nova = 5;
            } else if ($porc <= 75){
                $nova = 8;
            } else {
                $nova = 10;
            }
            $this->filme->setAvaliacao($nova);
        }

        # Getters e Setters
        # espectador
         public function getEspectador(){
            return $this->espectador;
        }
        public function setEspectador($e){
            $this->espectador = $e;
        }

        # filme
        public function getIdade(){
            return $this->filme;
        }
        public function setFilme($f){
            $this->filme = $f;
        }

    }

?>