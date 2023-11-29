<?php

class Titular {
  private $nomeTitular;
  private $cpfTitular;

  public function __construct(string $cpf, string $nome) {
    $this->cpfTitular = $cpf;
    $this->validarNome($nome);
    $this->nomeTitular = $nome;
  }
  
  public function definirCpf(string $cpf) {
    $this->cpfTitular = $cpf;
  }
 
  public function recuperarCpf() {
    return $this->cpfTitular;
  }
 
  public function definirNome(string $nome) {
    $this->nomeTitular = $nome;
  }
 
  public function recuperarNome() {
    return $this->nomeTitular;
  }
 
  private function validarNome(string $nome) {
   if(mb_strlen($nome) < 5) {
     echo "ERRO! o nome do titular precisa ter mais de 5 caracteres!\n";
     exit();
   }
  }
}