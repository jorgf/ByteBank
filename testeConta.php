<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Funcionario;

//teste titular
$endereco = new Endereco('rua 1', 'bairro c', '655A', 'fortaleza');
$titular1 = new Titular(new Cpf('08888888888'), 'titular01', $endereco);
$conta1 = new Conta($titular1);
$conta1->depositar(1000);
$conta1 -> sacar(100);
echo $conta1->recuperarNomeTitular() . PHP_EOL;
echo $conta1::$numeroDeContas . PHP_EOL;
var_dump ($conta1);