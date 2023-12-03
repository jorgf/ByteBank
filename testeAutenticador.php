<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Servico\Autenticador;

require_once 'autoload.php';

$diretor = new Diretor(
  new Cpf('080.999.666-88'),
  'jorge',
  new Endereco('rua 1', 'santo', '33', 'natal'),
  'Diretor',
  1000);

$gerente = new Gerente(
  new Cpf('888.666.888-99'),
  'leticia',
  new Endereco('rua 1', 'santo', '33', 'natal'),
  'gerente',
  2000);
// EXEMPLO DE POLIMORFISMO
$auth = new Autenticador();
echo 'Diretor: ';
$auth->login($diretor,'2222');
echo 'Gerente :';
$auth->login($gerente,'12334');