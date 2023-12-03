<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Interface\PodeAutenticar;

class Diretor extends Funcionario implements PodeAutenticar{
  
  public function calculaBonificacao() {
    return $this->retornaSalario() * 2;
  }

  public function podeAutenticar(string $senha) {
    return $senha === '2222';
  }
}