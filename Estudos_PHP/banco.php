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
/*
echo "<ul>";

foreach($banco as $cpf => $conta){
    exibeConta($conta);
}

echo "</ul>";
*/

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php
        foreach ($banco as $cpf => $conta){ ?>

        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>

        <?php } ?>
    </dl>
</body>
</html>
