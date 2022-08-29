<?php
class ContaBanco{

    public $numConta;
    protected $tipo;
    private $dono; 
    private $saldo;
    private $status;

    public function ContaBanco(){
        $this->saldo = 0;
        $this->status = false;
    }

    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
        } else if ($t == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "Conta com dinheiro!";
        } else if ($this->getSaldo() < 0){
            echo "Conta em débito!";
        } else {
            $this->setStatus(false);
        }
    }

    public function depositar($v){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo + $v);
        } else {
            echo "Impossivel depositar";
        }
    }

    public function sacar($v){
        if (($this->getStatus()) and ($this->getSaldo() >= $v)){
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "Impossivel sacar";
        }
    }

    public function pagarMensal(){
        if ($this->getTipo() == "CC"){
            $v = 12;
        } else if($this->getTipo() == "CP"){
            $v = 20;
        }
        if (($this->getSaldo() > $v) and ($this->getStatus())){
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "Impossivel pagar!";
        }
    }

    # Conta
    public function setNumConta($n){
        $this->numConta = $n;
    }
    public function getNumConta(){
        return $this->numConta; 
    }

    # tipo
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getTipo(){
        return $this->tipo;
    }

    # dono
    public function setDono($d){
        $this->dono = $d;
    }
    public function getDono(){
        return $this->dono;
    }
    
    # saldo
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    
    # status
    public function setStatus($st){
        $this->status = $st;
    }
    public function getStatus(){
        return $this->status;
    }
    
}
?>