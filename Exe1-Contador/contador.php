<?php

/*
Crie uma classe Contador, que encapsule um valor usado para
contagem de itens ou eventos. A classe deve oferecer métodos que
devem:
a) Zerar;
b) Incrementar;
c) Retornar o valor do contador.
*/

class Contador {
    public $contador;

    public function zerar () {
        $this-> contador = 0;
        echo "Contador zerado";
        echo "<br>";
        echo "Valor do contador = $this->contador";
    }

    public function incrementar () {
        $this-> contador += 1;
        echo "<hr>";
        echo "Contador incrementado";
        echo "<br>";
        echo "Valor do contador = $this->contador";
        echo "<hr>";
    }

    public function retornar () {
        echo "<hr>";
        echo "Valor do contador = $this->contador";
        echo "<hr>";
    }
}

?>