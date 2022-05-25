<?php

// Lendo o arquivo linha a linha

$arquivo = fopen(__DIR__ . '/lista-cursos.txt', 'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso;
}

fclose($arquivo);