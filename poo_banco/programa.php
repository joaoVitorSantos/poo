<?php

require 'classes/Conta.php';

$minhaConta = new Conta();

$minhaConta->dono = "João Lindão";
$minhaConta->numeroConta = "16012001";
$minhaConta->saldo = 10.00;

$minhaConta->deposita(20.00);

$conseguiSacar = $minhaConta->saca(20.00);

echo "O cliente {$minhaConta->dono} possui saldo de {$minhaConta->saldo} \n";

if ($conseguiSacar){
    echo "consegui sacar \n";
} else {
    echo  "saldo insuficiente para sacar \n";
}