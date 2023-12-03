<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Interface\PodeAutenticar;

class Diretor extends Funcionario implements PodeAutenticar{
  
  public function calculaBonificacao():float {
    return $this->retornaSalario() * 2;
  }
  public function podeAutenticar(string $senha):bool {
    return $senha === '2222';
  }
}