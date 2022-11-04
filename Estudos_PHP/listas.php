<?php

$listaIdade = [21, 29, 30, 33, 40, 99, "teste"];

$buscarPrimeiraIDade = $listaIdade[0];

//echo $buscarPrimeiraIDade;
echo count($listaIdade);


for ($i = 0; $i < 7; $i++){
    echo $listaIdade[$i] . PHP_EOL;
}