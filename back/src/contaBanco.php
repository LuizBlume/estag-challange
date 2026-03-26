<?php

class Bank {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(TRUE);
        if ($t == "CC") {
            $this->setSaldo(50);
        }
        elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta com saldo, não posso fechar!</p>";
        }
        elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em débito, não pode fechar!</p>";
        }
        else {
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " fechada com sucesso</p>";
        }
    }
    public function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
        }
        else {
            echo "<p>Conta fechada. Não consigo depositar.</p>";
        }
    }
    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                // $this->saldo = $this->saldo - $v;
                $this->setSaldo($this->getSaldo() - $v);
            }
            else {
                echo "<p>Saldo insuficiente para saque</p>";
            }
        }
        else {
            echo "<p>Não posso sacar de uma conta fechada.</p>";
        }
    }
    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        }
        elseif ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
        }
        else {
            echo "Problemas com a conta, não é possível realizar a cobrança.";
        }
    }
    function __construct() {
        $this->setSaldo(0);
        $this->setStatus(FALSE);
        echo "Conta criada com sucesso!";
    }
    function setNumConta($n) {
        $this->numConta = $n;
    }
    function setTipo($t) {
        $this->tipo = $t;
    }
    function setDono($dono) {
        $this->dono = $dono;
    }
    function setSaldo($saldo) {
        $this->saldo = $saldo;      
    }
    function setStatus($status) {
        $this->status = $status;
    }
    function getNumConta() {
        return $this->numConta;
    }
    function getTipo() {
        return $this->tipo;
    }
    function getDono() {
        return $this->dono;
    }
    function getSaldo() {
        return $this->saldo;
    }
    function getStatus() {
        return $this->status;
    }
}

?>