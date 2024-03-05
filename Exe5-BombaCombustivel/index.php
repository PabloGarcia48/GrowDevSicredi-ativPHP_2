<?php

require('./bombaCombustivel.php');

$abastecimento = new bombaCombustivel();


$abastecimento->statusBomba();
$abastecimento->abastecerPorValor(60);
$abastecimento->abastecerPorLitro(45);

$abastecimento->alterarValorCombustivel(6);
$abastecimento->abastecerPorValor(60);

$abastecimento->alterarQuantidadeCombustivel(200);

$abastecimento->abastecerPorLitro(210);

$abastecimento->abastecerPorValor(1500);

?>