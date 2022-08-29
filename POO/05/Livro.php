<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicacao{

        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function Livro($t, $au, $tp, $l){
            $this->titulo = $t;
            $this->autor = $au;
            $this->totPaginas = $tp;
            $this->leitor = $l;
            $this->pagAtual = 0;
            $this->aberto = false;
        }

        public function detalhes(){
            echo "Livro: " . $this->getTitulo() . " '" . $this->getAutor() . "'<br>";
            echo "Páginas: " . $this->getTotPaginas() . "<br>";
            echo "Sendo lido por: " . $this->getLeitor()->getNome();
        }

        public function abrir(){
            $this->setAberto(true);
        }
        public function fechar(){
            $this->setAberto(false);
        }
        public function folhear($p){
            if ($this->getTotPaginas() < $p){
                $this->setPagAtual(0);
            } else {
                $this->setPagAtual($p);
            }
        }
        public function avancarPag(){
            $this->setPagAtual($this->getPagAtual() + 1);
        }
        public function voltarPag(){
            $this->setPagAtual($this->getPagAtual() - 1);
        }

        # getters e setters
        # Titulo
        public function getTitulo(){
            return $this->Titulo;
        }
        public function setTitulo($t){
            $this->titulo = $t;
        }

        # Autor
        public function getAutor(){
            return $this->autor;
        }
        public function setAutor($a){
            $this->autor = $a;
        }

        # totPaginas
        public function getTotPaginas(){
            return $this->totPaginas;
        }
        public function setTotPaginas($tp){
            $this->totPaginas = $tp;
        }

         # pagAtual
         public function getPagAtual(){
            return $this->pagAtual;
        }
        public function setPagAtual($pg){
            $this->pagAtual = $pg;
        }

        # Aberto
        public function getAberto(){
            return $this->aberto;
        }
        public function setAberto($a){
            $this->aberto = $a;
        }

        # Leitor
        public function getLeitor(){
            return $this->leitor;
        }
        public function setLeitor($l){
            $this->leitor = $l;
        }
    }

?>