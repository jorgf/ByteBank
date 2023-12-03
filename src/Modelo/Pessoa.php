<?php

namespace Alura\Banco\Modelo;

class Pessoa {
  protected string $nome;
  protected Cpf $cpf;
  protected Endereco $endereco;

  public function __construct(string $nome, Cpf $cpf, Endereco $endereco) {
    $this->validarNome($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->endereco = $endereco;
  }

  public function recuperarCpf():string {
    return $this->cpf->recuperarNumero();
  }
   
  public function definirNome(string $nome):void {
    $this->nome = $nome;
  }
   
  public function recuperarNome():string {
    return $this->nome;
  }

  public function recuperarEndereco():Endereco {
    return $this->endereco;
  }
  
  protected function validarNome(string $nome) {
    if(mb_strlen($nome) < 5) {
      echo "ERRO! o nome do titular precisa ter mais de 5 caracteres!\n";
      exit();
    }
  }
    
}