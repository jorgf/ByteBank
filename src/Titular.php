<?php

class Titular {
  private string $nomeTitular;
  private Cpf $cpfTitular;
  private Endereco $endereco;

  public function __construct(Cpf $cpf, string $nome, Endereco $endereco) {
    $this->cpfTitular = $cpf;
    $this->validarNome($nome);
    $this->nomeTitular = $nome;
    $this->endereco = $endereco;
  }
  
  public function recuperarCpf() {
    return $this->cpfTitular->recuperarCpf();
  }
 
  public function definirNome(string $nome) {
    $this->nomeTitular = $nome;
  }
 
  public function recuperarNome() {
    return $this->nomeTitular;
  }

  public function recuperarEndereco() {
    return $this->endereco;
  }
 
  private function validarNome(string $nome) {
   if(mb_strlen($nome) < 5) {
     echo "ERRO! o nome do titular precisa ter mais de 5 caracteres!\n";
     exit();
   }
  }
}