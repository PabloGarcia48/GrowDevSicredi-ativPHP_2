<?php

require('./contaBancaria.php');

$contaBancaria = new ContaBancaria(25, "Pablo Garcia");

$contaBancaria->dadosCorrentista();
$contaBancaria->deposito(1000);
$contaBancaria->deposito(600);

$contaBancaria->saque(500);
$contaBancaria->saque(37);
$contaBancaria->saque(85);

$contaBancaria->saque(2000);

$contaBancaria->alterarNome("Pablo R L Garcia");

?>