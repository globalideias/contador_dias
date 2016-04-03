<?php

$hoje = date("Y-m-d");

$diretorio = __DIR__ . DIRECTORY_SEPARATOR . "dat" . DIRECTORY_SEPARATOR;
$arquivos_criados = glob($diretorio . "*.dt");
$dias = count($arquivos_criados);

if ($dias < 15) {

    $arquivo = $diretorio . $hoje . ".dt";
    if (!file_exists($arquivo)) {

        $fp = fopen($arquivo, 'w');
    }
} else {

    echo "Prazo de avaliação expirado";
}








