<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControleBonificacoes {
  private $totalBonificacoes = 0;
  
  public function adicionaBonificacao(Funcionario $funcionario){
    $this->totalBonificacoes += $funcionario->calculaBonificacao();
  }

  public function recuperaTotalBonificacoes() {
    return $this->totalBonificacoes;
  }
}
