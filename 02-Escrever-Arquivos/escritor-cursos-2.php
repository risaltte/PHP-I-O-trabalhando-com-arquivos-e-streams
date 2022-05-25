<?php 

// Vai fazer um append, adicionando o novo conteúdo ao final do arquivo

$arquivo = fopen(__DIR__ . '/cursos-php.txt', 'a');

$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

fwrite($arquivo, $curso);

fclose($arquivo);