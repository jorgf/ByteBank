<?php

class Funcionario extends Pessoa{

  private string $cargo;
  
  public function __construct(Cpf $cpf, string $nome, Endereco $endereco, string $cargo) {
    parent::__construct($nome, $cpf, $endereco);
    $this->cargo = $cargo;
  }
  
  public function retornarCargo(){
    return $this->cargo;
  }
}