<?php

/*
Crie uma classe para representar uma Calculadora. Esta classe
deve conter um atributo que servirá para armazenar o histórico das
operações e seus respectivos resultados.
a. Esta classe deve conter as operações de somar, multiplicar,
dividir e diminuir.
b. Esta classe deve iniciar com o histórico vazio
c. Esta classe deve conter uma ação para visualizar o histórico.
*/

class calculadora {

    public $historico = [];

    public function salvarHitorico($salvar) {
        $this->historico[] = $salvar;
    }

    public function somar ($n1, $n2) {
        $resultado = $n1 + $n2;
        $salvar = "Adição: $n1 + $n2 = $resultado";
        echo "<hr>";
        echo "$n1 + $n2 = $resultado";
        echo "<hr>";
        $this->salvarHitorico($salvar);
    }

    public function subtrair ($n1, $n2) {
        $resultado = $n1 - $n2;
        $salvar = "Subtração: $n1 - $n2 = $resultado";
        echo "<hr>";
        echo "$n1 - $n2 = $resultado";
        echo "<hr>";
        $this->salvarHitorico($salvar);
    }

    public function multiplicar ($n1, $n2) {
        $resultado = $n1 * $n2;
        $salvar = "Multiplicação: $n1 * $n2 = $resultado";
        echo "<hr>";
        echo "$n1 * $n2 = $resultado";
        echo "<hr>";
        $this->salvarHitorico($salvar);
    }

    public function dividir ($n1, $n2) {
        $resultado = $n1 / $n2;
        $salvar = "Divisão: $n1 / $n2 = $resultado";
        echo "<hr>";
        echo "$n1 / $n2 = $resultado";
        echo "<hr>";
        $this->salvarHitorico($salvar);
    }  
}

?>