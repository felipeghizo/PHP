<?php
    require_once 'AcoesVideo.php';
    class Video implements AcoesVideo{

        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function __construct($titulo){
            $this->titulo = $titulo;
            $this->avaliacao = 0;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reprodzindo = false; 
        }

        public function play(){
            $this->setReproduzindo(true);
        }
        public function pause(){
            $this->setReproduzindo(false);
        }
        public function like(){
            $this->setCurtidas($this->getCurtidas() + 1);
        }

        # Getter e Setters
        # Titulo
        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($t){
            $this->titulo = $t;
        }

        # avaliacao
        public function getAvaliacao(){
            return $this->avaliacao;
        }
        public function setAvaliacao($a){
            $media = ($this->getAvaliacao() + $a)/$this->getViews();
            $this->avaliacao = $media;
        }

        # views
        public function getViews(){
            return $this->views;
        }
        public function setViews($v){
            $this->views = $v;
        }

        # curtidas
        public function getCurtidas(){
            return $this->curtidas;
        }
        public function setCurtidas($c){
            $this->curtidas = $c;
        }

        # reproduzindo
        public function getReproduzindo(){
            return $this->reproduzindo;
        }
        public function setReproduzindo($r){
            $this->reproduzindo = $r;
        }
    }

?>