<?php

namespace Alura\Banco\Modelo;

class Cpf {
  private $numero;
  
  public function __construct(string $numero) {
    $this->validarNumero($numero);
    $this->numero = $numero;

  }

  public function recuperarNumero() {
    return $this->numero;
  }

  public function limparNumero($numero) {
    $pattern = '/[^\d]/';
    $replacement = "";
    return preg_replace($pattern, $replacement, $numero);
  }

  public function validarNumero($numero) {
    if (strlen($this->limparnumero($numero)) < 11) {
      echo "CPF inválido!" . PHP_EOL;
      exit();
    }
  }

  //TODO - validar numero do CPF, ate agora foi feito apenas verificacao do tamanho 

}