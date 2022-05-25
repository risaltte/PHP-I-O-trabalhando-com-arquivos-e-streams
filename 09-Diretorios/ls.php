<?php

$direcorioAtual = dir('.');

while ($arquivo = $direcorioAtual->read()) {
    echo $arquivo . PHP_EOL;
}