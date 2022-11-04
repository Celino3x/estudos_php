<?php

$idade = 10;
$estado = "RJ";

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if($idade == 18 or $idade > 18){
    print "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} elseif ($estado == "RJ" and $idade == 18 or $idade > 18){
    print "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else{
    echo "Você tem $idade e mora no $estado , por isso não pode Entrar.";
}