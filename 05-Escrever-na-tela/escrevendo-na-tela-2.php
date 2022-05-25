<?php

$tela = fopen('php://stderr', 'w');
fwrite($tela, 'Olá mundo na saída de erro.');