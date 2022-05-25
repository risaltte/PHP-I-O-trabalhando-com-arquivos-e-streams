<?php

require __DIR__ . '/../MeuFiltro.php';

$arquivoCursos = fopen(__DIR__ . '/lista-cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivoCursos, 'string.toupper');
stream_filter_append($arquivoCursos, 'alura.partes');

echo fread($arquivoCursos, filesize(__DIR__ . '/lista-cursos.txt'));