<?php
class Lutador {

    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    public function Lutador($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;

    }

    public function apresentar(){
        echo "Lutador: " . $this->getNome() . "!<br>";
        echo "Origem: " . $this->getNacionalidade() . "!<br>";
        echo $this->getIdade() . " anos!<br>";
        echo $this->getAltura() . " m de altura!<br>";
        echo "Pesando " . $this->getPeso() . " Kg!<br>";
        echo "Ganhou: " . $this->getVitorias() . " lutas!<br>";
        echo "Perdeu: " . $this->getDerrotas() . " lutas!<br>";
        echo "Empatou: " . $this->getEmpates() . " lutas!<br>";
    }

    public function status(){
        echo $this->getNome() . " ";
        echo "É um peso " . $this->getCategoria() . " ";
        echo $this->getVitorias() . " vitórias" . " ";
        echo $this->getDerrotas() . " derrotas" . " ";
        echo $this->getEmpates() . " empates" . " ";
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    # gets e sets
    # nome
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    
    # nacionalidade
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setNacionalidade($n){
        $this->nacionalidade = $n;
    }
    
    # idade
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }

    # altura
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($a){
        $this->altura = $a;
    }
    
    # peso
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($p){
        $this->peso = $p;
        $this->setCategoria();
    }

    # categoria
    public function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria(){
        if ($this->getPeso() < 52.2){
            $this->categoria = "Inválido";
        } else if ($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        } else if ($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        } else if ($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    # vitorias
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setVitorias($v){
        $this->vitorias = $v;
    }

    # derrotas
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setDerrotas($d){
        $this->derrotas = $d;
    }

    # empates
    public function getEmpates(){
        return $this->empates;
    }
    public function setEmpates($e){
        $this->empates = $e;
    }
    
}
?>