<?php

// Lendo o arquivo todo
// Se atentar ao tamanho do arquivo, pois por padrão a configuração do PHP se limita a 128M de memória

$arquivo = fopen(__DIR__ . '/lista-cursos.txt', 'r');

$tamanhoDoArquivo = filesize(__DIR__ . '/lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);