<?php
//NOME DAS CLASSES : SUBSTANTIVOS
//NOME DOS METODOS : VERBOS IMPERATIVOS 
class Conta { 

  private string $cpfTitular;
  private string $nomeTitular;
  private float $saldo = 0;
  public static $numeroDeContas = 0;

  public function __construct(string $cpfTitular, string $nomeTitular) {
    $this->cpfTitular = $cpfTitular;
    $this->validarNome($nomeTitular);
    $this->nomeTitular = $nomeTitular;
    $this->saldo = 0;
    self::$numeroDeContas++;
  }

  public function __destruct() { //executa o garbage collector para liberar memoria
    self::$numeroDeContas--;
  }

  public function definirCpf(string $cpf) {
    $this->cpfTitular = $cpf;
  }

  public function recuperarCpfTitular() {
    return $this->cpfTitular;
  }

  public function definirNome(string $nome) {
    $this->nomeTitular = $nome;
  }

  public function recuperarNomeTitular() {
    return $this->nomeTitular;
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

  private function validarNome(string $nome) {
    if(mb_strlen($nome) < 5) {
      echo "ERRO! o nome do titular precisa ter mais de 5 caracteres!\n";
      exit();
    }
  }

  public static function recuperarNumeroDeContas() {
    return self::$numeroDeContas;
  }
}
