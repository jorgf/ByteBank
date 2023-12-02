<?php
namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario {
  
  public function calculaBonificacao() {
    return $this->retornaSalario() * 2;
  }

  public function autenticar(string $senha) {
    //TODO
  }
}