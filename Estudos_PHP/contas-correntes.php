<?php
/*
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
    'titular' => 'Jordan',
    'saldo' => 1500,
    'cc' => 0002
];

*/

$banco = [
    22546469494 => [
        'titular' => 'Vinicius',
        'saldo' => 1000,
        'cc' => 0001
    ],
    12311616714 => [
        'titular' => 'Juscelino',
        'saldo' => 1500,
        'cc' => 0002
    ],
    42251151556 => [
        'titular' => 'Jordan',
        'saldo' => 1500,
        'cc' => 0002
    ]
];

foreach ($banco as $cpf => $conta) {
    echo $cpf. PHP_EOL;
}

foreach($banco as $cpf => $conta){
    echo $conta['titular'] .  PHP_EOL;
}

/*
foreach ($banco as $conta){
    echo $conta['titular'] .  PHP_EOL;
}
*/

/*for ($i = 0; $i < count($banco); $i++){
    echo $banco[$i]['titular'] . PHP_EOL;
}
*/
//echo $conta001['titular'];
