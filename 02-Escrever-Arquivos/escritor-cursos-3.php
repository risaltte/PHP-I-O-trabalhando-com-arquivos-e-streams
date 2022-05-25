<?php 

// vai sobrescrever o conteúdo do arquivo

$curso = "Design Patterns PHP I: Boas práticas de programação";

file_put_contents(__DIR__ . '/cursos-php.txt', $curso);