<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Exceptions\SaldoInsuficienteException;
use InvalidArgumentException;

abstract class Conta { 

  private Titular $titular;
  protected float $saldo = 0;
  public static $numeroDeContas = 0;

  public function __construct(Titular $titular) {
    $this->titular = $titular;
    $this->saldo = 0;
    self::$numeroDeContas++;
  }

  public function __destruct() {
    self::$numeroDeContas--;
  }
  
  public function sacar(float $valorParaSacar):void {
    $tarifaSaque = $valorParaSacar * $this->percentualTarifa();
    $valorSaque = $valorParaSacar + $tarifaSaque;
    if ($valorParaSacar > $this->saldo) {
      throw new SaldoInsuficienteException($valorSaque, $this->saldo);
    }
    $this->saldo -=$valorSaque;
  }

  public function depositar(float $valorParaDepositar):void {
    if($valorParaDepositar < 0) {
     throw new InvalidArgumentException();
    }
    $this->saldo += $valorParaDepositar; 
  }

  public function recuperarNomeTitular():string {
    return $this->titular->recuperarNome();
  }

  public function recuperarCpfTitular():string {
    return $this->titular->recuperarCpf();
  }

  public function recuperarSaldo():float {
    return $this->saldo;
  }

  public static function recuperarNumeroDeContas():int {
    return self::$numeroDeContas;
  }

  abstract public function percentualTarifa():float;
}
