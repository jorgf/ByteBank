<?php
require_once 'src/Conta.php';


//criar conta
$conta1 = new Conta('088.888.888-89', 'titular01');
$conta1->depositar(1000);
$conta1 -> sacar(100);
echo $conta1->recuperarNomeTitular() . PHP_EOL;
echo $conta1::$numeroDeContas . PHP_EOL;
var_dump ($conta1);
unset($conta1); //testar o __desctruct
$conta2 = new Conta('088.888.888-89', 'titular02');
echo $conta2::recuperarNumeroDeContas() . PHP_EOL;

