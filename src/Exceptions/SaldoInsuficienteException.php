<?php

namespace  Alura\Banco\Exceptions;

use DomainException;

class SaldoInsuficienteException extends DomainException {

    public function __construct(float $valorSaque, float $valorAtual) {
      $mensagem = "Você tentou sacar R$ $valorSaque, mas seu saldo atual é de R$ $valorAtual";
      parent::__construct($mensagem);
    }
}