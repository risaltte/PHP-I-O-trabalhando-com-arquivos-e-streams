<?php

$arquivoCursos = new SplFileObject(__DIR__ . '/cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo $linha[0] . PHP_EOL;
}