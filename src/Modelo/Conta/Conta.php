<?php

namespace Alura\Banco\Modelo\Conta;

class Conta { 

  private Titular $titular;
  private float $saldo = 0;
  public static $numeroDeContas = 0;

  public function __construct(Titular $titular) {
    $this->titular = $titular;
    $this->saldo = 0;
    self::$numeroDeContas++;
  }

  public function __destruct() {
    self::$numeroDeContas--;
  }

  public function sacar(float $valorParaSacar) {
    if ($valorParaSacar > $this->saldo) {
      echo "Saldo indisponível\n";
      return;
    }
    $this->saldo -=$valorParaSacar;
  }

  public function depositar(float $valorParaDepositar) {
    if($valorParaDepositar < 0) {
      echo "Valor precisa ser maior que zero!";
      return;
    }
    $this->saldo += $valorParaDepositar; 
  }

  public function transferir(float $valorParaTransferir, Conta $contaDestino) {
    if($valorParaTransferir < $this->saldo) {
      echo "Saldo indisponível";
      return;
    }
    $this->sacar($valorParaTransferir);
    $contaDestino->depositar($valorParaTransferir);
  }

  public function recuperarNomeTitular() {
    return $this->titular->recuperarNome();
  }

  public function recuperarCpfTitular() {
    return $this->titular->recuperarCpf();
  }

  public static function recuperarNumeroDeContas() {
    return self::$numeroDeContas;
  }
}
