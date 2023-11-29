<?php

class Titular extends Pessoa {
  
  public function __construct(Cpf $cpf, string $nome, Endereco $endereco) {
    parent::__construct($nome, $cpf, $endereco);
  }
}