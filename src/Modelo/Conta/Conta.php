<?php

namespace Alura\Banco\Modelo\Conta;

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
      echo "Saldo indisponível\n";
      return;
    }
    $this->saldo -=$valorSaque;
  }

  public function depositar(float $valorParaDepositar):void {
    if($valorParaDepositar < 0) {
      echo "Valor precisa ser maior que zero!";
      return;
    }
    $this->saldo += $valorParaDepositar; 
  }

  public function recuperarNomeTitular():string {
    return $this->titular->recuperarNome();
  }

  public function recuperarCpfTitular():string {
    return $this->titular->recuperarCpf();
  }

  public static function recuperarNumeroDeContas():int {
    return self::$numeroDeContas;
  }

  abstract public function percentualTarifa():float;
}
