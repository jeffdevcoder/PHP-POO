<?php
class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status; 

    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false); 
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function abrirConta($t) {
        $this->setTipo($t);
        $this->status = true;
        if ($t == 'CC') $this->setSaldo(50);
        if ($t == 'CP') $this->setSaldo(150);
    }
    public function fecharConta() {
        if($this->getSaldo() > 0) {
            echo "<p>Conta ainda há dinheiro, não há como encerrar a conta.</p>";
        } elseif ($this->getSaldo() < 0) {
            if($this->getSaldo() < 0) echo "<p>Conta está em débito, não há como encerrar a conta.</p>";
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($v) {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de R$$v na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Conta encerrada, não é possível depositar.</p>";
        }
    }
    public function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() -$v);
                echo "<p>Saque autorizado.</p>";
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo "<p>Não há como sacar em uma conta fechada.</p>";
        }
    }
    public function pagarMensal() {   
        if ($this->getTipo() == 'CC') {
            $v = 12;
        }
        else if ($this->getTipo() == 'CP') {
            $v = 20;
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$$v debitada na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Problemas com a conta. Não há como cobrar.</p>";
        }
    }

    public function getNumConta() {
        return $this->numConta;   
    }
    public function setNumConta($n) {
        $this->numConta = $n;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($t) {
        $this->tipo = $t;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setDono($d) {
        $this->dono = $d;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($s) {
        $this->saldo = $s;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($s) {
        $this->status = $s;
    }

}