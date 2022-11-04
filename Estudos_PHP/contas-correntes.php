<?php

$conta001 = [
    'titular' => 'Vinicius',
    'saldo' => 1000,
    'cc' => 0001
];

$conta002 = [
    'titular' => 'Juscelino',
    'saldo' => 1500,
    'cc' => 0002
];

$conta003 = [
    'titular' => 'Juscelino',
    'saldo' => 1500,
    'cc' => 0002
];

$banco = [$conta001, $conta002, $conta003];

echo $conta001['titular'];

//Estudos de PHP - Array Associativos