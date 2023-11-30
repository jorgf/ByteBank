<?php

spl_autoload_register(function(string $caminho){
    $caminhoArquivo = str_replace('Alura\\Banco','src', $caminho);
    $caminhoArquivo = str_replace('\\',DIRECTORY_SEPARATOR,$caminhoArquivo);
    $caminhoArquivo .= '.php';
    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});