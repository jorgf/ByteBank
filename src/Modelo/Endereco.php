<?php

namespace Alura\Banco\Modelo;

class Endereco {
  
  private string $rua;
  private string $bairro;
  private string $numero;
  private string $cidade;

  public function __construct(string $rua, string $bairro, string $numero, string $cidade) {
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->numero = $numero;
    $this->cidade = $cidade;
  }

  public function recuperarRua(){
    return $this->rua;
  }
  public function recuperarBairro(){
    return $this->bairro;
  }
  public function recuperarNumero(){
    return $this->numero;
  }
  public function recuperarCidade(){
    return $this->cidade;
  }
}