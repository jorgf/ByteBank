<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControleBonificacoes {
  private float $totalBonificacoes = 0;
  
  public function adicionaBonificacao(Funcionario $funcionario):void {
    $this->totalBonificacoes += $funcionario->calculaBonificacao();
  }

  public function recuperaTotalBonificacoes():float {
    return $this->totalBonificacoes;
  }
}
