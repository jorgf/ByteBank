<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Funcionario,Gerente};
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Servico\ControleBonificacoes;

$cpf = new Cpf('777.777.777-89');
$endereco = new Endereco('a','a','a','a');
$funcionario = new Diretor(
    $cpf, 
    'jorge', 
    $endereco, 
    'Desenvolvedor', 
    1000
);

$funcionario2 = new Gerente(
    new Cpf('88888888889'),
     'jorge', 
     $endereco, 
     'Gerente', 
     1000
);


$bonificacao = new ControleBonificacoes();
$bonificacao->adicionaBonificacao($funcionario);
$bonificacao->adicionaBonificacao($funcionario2);
echo $bonificacao->recuperaTotalBonificacoes() . PHP_EOL;