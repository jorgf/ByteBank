<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Traits\TraitsEndereco;

class Endereco {
  
  private string $rua;
  private string $bairro;
  private string $numero;
  private string $cidade;
  use TraitsEndereco;
  
  public function __construct(string $rua, string $bairro, string $numero, string $cidade) {
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->numero = $numero;
    $this->cidade = $cidade;
  }

  public function recuperarRua():string {
    return $this->rua;
  }
  public function recuperarBairro():string {
    return $this->bairro;
  }
  public function recuperarNumero():string {
    return $this->numero;
  }
  public function recuperarCidade():string {
    return $this->cidade;
  }
}