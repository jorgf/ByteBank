<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Interface\PodeAutenticar;

class Gerente extends Funcionario implements PodeAutenticar{
  
  public function calculaBonificacao():float {
    return $this->retornaSalario();
  }

  public function podeAutenticar(string $senha):bool {
    return $senha === '1234';
  }
}