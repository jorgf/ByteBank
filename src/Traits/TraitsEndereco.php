<?php

namespace Alura\Banco\Traits;

trait TraitsEndereco{
  public function __set($parametro, $value){
    $this->$parametro = $value;
    echo $this->$parametro;
  }
}