<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$endereco = new Endereco('rua 1', 'bairro 2', '43g', 'Mossoro');
//testando o uso de traits para modificar o parametro rua (protected)
$endereco->rua='teste';