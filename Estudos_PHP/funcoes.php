<?php

function sacar(array $conta, float $valorASacar):array {
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Operação não pode ser realizada, não pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem(string $mensagem) {
    echo $mensagem .PHP_EOL;
}


function depositar(array $conta, $valorADepositar):array{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else{
        exibeMensagem("Depósito precisam ser positivos");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
}