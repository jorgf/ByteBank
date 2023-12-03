<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

abstract class Funcionario extends Pessoa{

  private string $cargo;
  private float $salario;
  
  public function __construct(Cpf $cpf, string $nome, Endereco $endereco, string $cargo, float $salario) {
    parent::__construct($nome, $cpf, $endereco);
    $this->cargo = $cargo;
    $this->salario = $salario;
  }
  
  public function retornarCargo():string {
    return $this->cargo;
  }

  public function retornaSalario():float {
    return $this->salario;
  }

  public function calculaBonificacao():float {
    return $this->salario * 0.1;
  }
}