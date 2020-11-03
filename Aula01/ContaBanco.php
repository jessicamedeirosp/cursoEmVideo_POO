<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function __construct() {
        $this->numConta = $numConta;
        $this->tipo = $tipo;
        $this->dono = $dono;
        $this->saldo = 0;
        $this->status = false;
    }
    
   
    public function getNumConta() {
        return $this->numConta;
    }
 
    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }
    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        
        if($tipo=='cc') {
            $this->setSaldo(50);
        } elseif ($tipo == 'cp') {
            $this->setSaldo(150);
        } 
        
    }
    public function fecharConta() {
        if($this->getSaldo() > 0) {
            print_r('Conta com dinheiro');
        } elseif ($this->getSaldo() < 0) {
            print_r('conta em débito');
        }  else {
            $this->setStatus(false);
        }   
        
    }
    public function depositar($valor) {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $valor);
        } else {
            print_r('Impossível Depositar');
        }        
    }
    public function sacar($valor) {
        if ($this->getStatus()) {
            if($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
            } else {
                print_r('Saldo Insuficiente');
            }
        } else {
            print_r('Impossível Sacar');
        }        
    }
    public function pagarMensal() {
        $valor=0;
        if($this->getTipo() == 'cc') {
           $valor = 12;
        } else if ($this->getTipo() == 'cp') {
            $valor = 20;
        }
        if ($this->getStatus()) {
            if($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
            } else {
                print_r('Saldo Insuficiente');
            }
        } else {
            print_r('Impossível pagar');
        } 
        
    }

    
}
