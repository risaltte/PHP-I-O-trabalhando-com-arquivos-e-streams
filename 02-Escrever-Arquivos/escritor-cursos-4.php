<?php 

// Vai fazer um append, adicionando o novo conteúdo ao final do arquivo

$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

file_put_contents(__DIR__ . '/cursos-php.txt', $curso, FILE_APPEND);