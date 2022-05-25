<?php 

// Vai sobrescrever o conteúdo do arquivo;

$arquivo = fopen(__DIR__ . '/cursos-php.txt', 'w');

$curso = "Design Patterns PHP I: Boas práticas de programação";

fwrite($arquivo, $curso);

fclose($arquivo);