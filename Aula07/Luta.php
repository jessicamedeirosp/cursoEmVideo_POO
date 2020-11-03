<?php

class Luta {
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;
  public function __construct() {
     
  }
  public function setDesafiado($desafiado): void {
      $this->desafiado = $desafiado;
  }

  public function setDesafiante($desafiante): void {
      $this->desafiante = $desafiante;
  }

  public function setRounds($rounds): void {
      $this->rounds = $rounds;
  }

  public function setAprovada($aprovada): void {
      $this->aprovada = $aprovada;
  }
  function getDesafiado() {
      return $this->desafiado;
  }

  function getDesafiante() {
      return $this->desafiante;
  }

  function getRounds() {
      return $this->rounds;
  }

  function getAprovada() {
      return $this->aprovada;
  }

    public function marcarLuta($desafiante, $desafiado) {
      if($desafiado->getCategoria() === $desafiante->getCategoria() && $desafiado !== $desafiante){
          $this->setAprovada(true);
          $this->setDesafiado($desafiado);
          $this->setDesafiante($desafiante);
      } else {
          $this->setAprovada(false);
          $this->setDesafiado(null);
          $this->setDesafiante(null);
      }
  }
  
  public function lutar() {
      if($this->getAprovada()) {
          $this->desafiado->apresentar();
          $this->desafiante->apresentar();
          $vencedor = rand(0,2);
          switch ($vencedor) {
              case 0: 
                  echo 'Empate';
                  $this->desafiado->empatarLuta();
                  $this->desafiante->empatarLuta();
                  break;
              case 1:
                  echo $this->desafiado->getNome() . ' Ganhou';
                  $this->desafiado->ganharLuta();
                  $this->desafiante->perderLuta();
                  break;
              case 2:
                  echo $this->desafiante->getNome() .' Ganhou';
                  $this->desafiado->perderLuta();
                  $this->desafiante->ganharLuta();
                  break;
          }
      } else {
          echo 'A luta não pode acontecer';
      }
      
  }
  


}
