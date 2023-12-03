<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Diretor,Gerente};
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Servico\ControleBonificacoes;

$funcionario = new Diretor(
  new Cpf('777.777.777-89'), 
  'jorge', 
  new Endereco('a','a','a','a'), 
  'Diretor', 
  1000
);

$funcionario2 = new Gerente(
  new Cpf('888.888.888-89'),
  'jorge', 
  new Endereco('b','b','b','b'),
  'Gerente', 
  2000
);

$bonificacao = new ControleBonificacoes();
$bonificacao->adicionaBonificacao($funcionario);
$bonificacao->adicionaBonificacao($funcionario2);
echo $bonificacao->recuperaTotalBonificacoes() . PHP_EOL;