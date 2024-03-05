<?php

require("./carro.php");

$carro1 = new Carro(20);

$carro1->statusVeiculo();
$carro1->rodar(90);
$carro1->abastecer(20);

$carro1->rodar(600);

$carro1->abastecer(200);

?>