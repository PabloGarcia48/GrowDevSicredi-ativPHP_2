<?php

require('./calculadora.php');

$operacao = new Calculadora();

$operacao->somar(25,37);
$operacao->subtrair(257,78);
$operacao->multiplicar(7,13);
$operacao->dividir(115,56);

print_r($operacao->historico);

?>