<?php

require_once "Conta.php";
require_once "ContaPremium.php";

$conta = new Conta();
$conta->depositar(20);
$conta->sacar(0);

echo $conta->getSaldo(); 