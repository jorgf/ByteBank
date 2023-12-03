<?php

namespace Alura\Banco\Interface;

interface PodeAutenticar{
  public function podeAutenticar(string $senha): bool;
}