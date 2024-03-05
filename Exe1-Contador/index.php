<?php

require('./contador.php');

$meuContador = new Contador();

$meuContador-> zerar();
$meuContador-> incrementar();
$meuContador-> incrementar();
$meuContador-> incrementar();
$meuContador-> retornar();


?>