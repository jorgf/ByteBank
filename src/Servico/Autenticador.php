<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Interface\PodeAutenticar;

class Autenticador{
  public function login(PodeAutenticar $autenticavel, string $senha):void {
    echo $autenticavel->podeAutenticar($senha)?'Acesso permitido'.PHP_EOL:'Acesso Negado'.PHP_EOL;
  }
}