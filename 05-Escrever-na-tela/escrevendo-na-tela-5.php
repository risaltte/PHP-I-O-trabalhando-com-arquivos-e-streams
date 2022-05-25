<?php

$cursos = fopen('zip://' . __DIR__ .  '/arquivos.zip#cursos-php.txt', 'r');

stream_copy_to_stream($cursos, STDOUT);