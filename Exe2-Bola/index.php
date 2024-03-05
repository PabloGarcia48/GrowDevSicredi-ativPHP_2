<?php
require('./bola.php');

$bola = new Bola();

$bola->trocarCor('azul');
$bola->mostrarCor();

$bola->trocarCor('preta');
$bola->mostrarCor();

$bola->trocarCor('branca');
$bola->mostrarCor();

?>