<?php

$context = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents('zip://' . __DIR__ . '/arquivos.zip#lista-cursos.txt', false, $context);