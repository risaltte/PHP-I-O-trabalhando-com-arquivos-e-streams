<?php

$arquivoCursos = new SplFileObject(__DIR__ . '/cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo utf8_encode($linha[0]) . PHP_EOL;
}