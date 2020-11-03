<?php
require_once 'Controlador.php';
class ControlerRemoto implements  Controlador {

    private $volume;
    private $ligado;
    private $tocando;
    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    function getVolume() {
        return $this->volume;
    }

    function getLigado() {
        return $this->ligado;
    }

    function getTocando() {
        return $this->tocando;
    }

    function setVolume($volume): void {
        $this->volume = $volume;
    }

    function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    public function ligar() {
        $this->setLigado(true);
    }
    
    public function desligar() {
        $this->setLigado(false);
    }
    
    public function abrirMenu() {
        echo "<br/>Ligado? " .($this->getLigado() ? "Sim" : "Não");
        echo "<br/>Tocando? " .($this->getTocando() ? "Sim" : "Não");
        echo "<br/>Volume: " . $this->getVolume();

    }
    
    public function fecharMenu() {
          echo 'Fechando Menu';
    }  
  
    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() -5);
        }
    }
    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
        
    }

    public function desligarMudo() {
      if($this->getLigado() && $this->getVolume() == 0) {
          $this->setVolume(50);
      }
    }  

    public function play() {
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }

    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

}
