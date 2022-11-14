<?php

include 'funcoes.php';

$banco = [
    '225.464.694-94' => [
        'titular' => 'Vinicius',
        'saldo' => 1000,
        'cc' => 0001
    ],
    '123.116.167-14' => [
        'titular' => 'Juscelino',
        'saldo' => 1500,
        'cc' => 0002
    ],
    '422.511.515-56' => [
        'titular' => 'Jordan',
        'saldo' => 1500,
        'cc' => 0002
    ]
];

//Sacar
$banco['225.464.694-94'] = sacar($banco['225.464.694-94'], 500);

//Depositar

$banco['123.116.167-14'] = depositar($banco['123.116.167-14'], 900);

/*
if (1600 > $banco['123.116.167-14']['saldo']){
    exibeMensagem("Operação não pode ser realizada, não pode sacar esse valor");
} else {
    $banco['123.116.167-14']['saldo'] -= 500;
}

if (1600 > $banco['422.511.515-56']['saldo']){
    exibeMensagem("Operação não pode ser realizada, não pode sacar esse valor");
} else {
    $banco['422.511.515-56']['saldo'] -= 1600;
}
*/

unset($banco['123.116.167-14']);

titularComLetrasMaiusculas($banco['422.511.515-56']);

foreach($banco as $cpf => $conta){
    ['titular' => $titular, 'saldo' => $saldo ]= $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}