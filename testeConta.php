<?php

require_once 'autoload.php';

use Alura\Banco\Exceptions\NomeInvalidoException;
use Alura\Banco\Exceptions\SaldoInsuficienteException;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\ContaCorrente;

$endereco = new Endereco('rua 1', 'bairro c', '6A', 'fortaleza');
try{
  $cpf = new Cpf('088.888.888-88');
} catch(InvalidArgumentException $exception){
  exit("Cpf inválido!");
}

try{
  $titular1 = new Titular($cpf, 'tit', $endereco);
} catch(NomeInvalidoException $e) {
  exit("Nome com tamanho inválido, precisa ter mais de 5 caracteres");
}
$conta1 = new ContaCorrente($titular1);
$conta1->depositar(600);
try {
    //code...
    $conta1 -> sacar(500);
} catch (SaldoInsuficienteException $exception) {
    echo $exception->getMessage();
}

try {
    //code...
    $conta1->depositar(100);
} catch (InvalidArgumentException $arg) {
    //throw $th;
    echo "Valor precisa ser maior que zero" . PHP_EOL;
}
//echo $conta1->recuperarNomeTitular() . PHP_EOL;
echo $conta1->recuperarSaldo().PHP_EOL;