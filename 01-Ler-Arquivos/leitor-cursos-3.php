<?php

// file_get_contents devolve todo o conteúdo o arquivo como uma string. 
// file devolve cada linha do arquivo como um item em um array.

$cursos = file_get_contents(__DIR__ . '/lista-cursos.txt');
echo $cursos;

echo PHP_EOL . PHP_EOL;

$cursosArray = file(__DIR__ . '/lista-cursos.txt');
print_r($cursosArray);

