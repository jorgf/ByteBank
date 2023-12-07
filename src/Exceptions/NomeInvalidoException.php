<?php

namespace Alura\Banco\Exceptions ;

use LengthException;

class NomeInvalidoException extends LengthException {
    public function __construct() {
        $msg = "Nome com tamanho inválido!";
        parent::__construct($msg);
    }
}