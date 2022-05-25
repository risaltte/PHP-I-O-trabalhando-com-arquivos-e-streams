<?php

$context = stream_context_create([
    'http' => [
        'method' => 'DELETE',
        'header' => 'X-FROM: PHP'
    ]
]);

echo file_get_contents('http://httpbin.org/delete', false, $context);