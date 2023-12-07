<?php

namespace Alura\Banco\Modelo;

use InvalidArgumentException;

class Cpf {
  private $numero;
  
  public function __construct(string $numero) {
    $this->validarNumero($numero);
    $this->numero = $numero;

  }

  public function recuperarNumero():string {
    return $this->numero;
  }

  public function limparNumero($numero):string {
    $pattern = '/[^\d]/';
    $replacement = "";
    return preg_replace($pattern, $replacement, $numero);
  }

  public function validarNumero($numero):void {
    if (strlen($this->limparnumero($numero)) < 11) {
      throw new InvalidArgumentException();
    }
  }

  //TODO - validar numero do CPF, ate agora foi feito apenas verificacao do tamanho 

}