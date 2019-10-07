<?php
class Conta{
    protected $agencia;
    protected $conta;
    protected  $saldo;

    public function __construct($agencia, $conta, $saldo){
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getDetalhes(){
        return "Agencia: {$this->agencia} | Conta:{$this->conta} | Saldo:{$this->saldo}<br />"; 

    }
    public function depositar($valor){
        $this->saldo += $valor;
    }

}

$c1 = new Conta(100, 2121, 3000);
$c1->depositar(1421);

echo $c1->getDetalhes();