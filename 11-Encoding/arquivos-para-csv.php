<?php

$meusCursos = file(__DIR__ . '/cursos-php.txt');
$outrosCursos = file(__DIR__ . '/lista-cursos.txt');

$arquivoCsv = fopen(__DIR__ . '/cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Sim'];

    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha =  [trim(utf8_decode($curso)), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);