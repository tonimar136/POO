<?php

  class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
      $this->setSaldo(0);
      $this->setStatus(false);
    }

    public function abrirConta($t){
      $this->setTipo($t);
      $this->setStatus(true);
      if($t == 'CC'){
        $this->setSaldo(50);
      }elseif($t == 'CP'){
        $this->setSaldo(150);
      }
    }

    public function fecharConta(){
      if($this->getSaldo() > 0){
        echo 'Conta com dinheiro<br>';
      }elseif($this->getSaldo() < 0){
        echo 'Conta em debito<br>';
      }else{
        $this->setStatus(false);
      }
    }

    public function depositar($v){
      if($this->getStatus()){
        $this->setSaldo($this->getSaldo() + $v);
        echo 'Deposito feito no valor de ' . $v . ' na conta de ' . $this->getDono() . '<br>';
      }else{
        echo 'impossivel depositar<br>';
      }
    }

    public function sacar($v){
      if($this->getStatus()){
        if($this->getSaldo() >= $v) {
          $this->setSaldo($this->getSaldo() - $v);
          echo 'Saque de R$' . $v . ' na conta de ' . $this->getDono() . '<br>';;
        }else{
          echo 'saldo insuficiente<br>';
        }
      }else{
        echo 'impossivel sacar';
      }
    }

    public function pagarMensal(){
      if($this->getTipo() == 'CC') {
        $v = 12;
      }elseif($this->getTipo() == 'CP'){
        $v = 20;
      }

      if($this->getStatus()) {
        if($this->getSaldo() > $v){
          $this->setSaldo($this->getSaldo() - $v);
          echo 'Pagamento mensal debitado no valor de ' . $v . ' na conta de ' . $this->getDono() . '<br>';
        }else {
          echo "Saldo Insuficiente<br>";
        }
      }
    }




    public function getnumConta(){
      return $this->numConta;
    }
    public function getTipo(){
      return $this->tipo;
    }
    public function getDono(){
      return $this->dono;
    }
    public function getSaldo(){
      return $this->saldo;
    }
    public function getStatus(){
      return $this->status;
    }




    public function setnumConta($numconta){
      $this->numConta = $numconta;
    }
    public function setTipo($tipo){
      $this->tipo = $tipo;
    }
    public function setDono($dono){
      $this->dono = $dono;
    }
    public function setSaldo($saldo){
      $this->saldo = $saldo;
    }
    public function setStatus($status){
      $this->status = $status;
    }

  }
