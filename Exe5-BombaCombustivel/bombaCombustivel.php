<?php
/*
Faça um programa completo utilizando classes e métodos que:
a. Possua uma classe chamada BombaCombustivel, com no
mínimo esses atributos:
i. tipoCombustivel.
ii. valorLitro
iii. quantidadeCombustivel
b. Possua no mínimo esses métodos:
i. abastecerPorValor() – método onde é informado o
valor a ser abastecido e mostra a quantidade de litros
que foi colocada no veículo
ii. abastecerPorLitro() – método onde é informado a
quantidade em litros de combustível e mostra o valor a
ser pago pelo cliente.
iii. alterarValor() – altera o valor do litro do combustível.
iv. alterarCombustivel() – altera o tipo do combustível.
v. alterarQuantidadeCombustivel() – altera a
quantidade de combustível restante na bomba.
OBS: Sempre que acontecer um abastecimento é necessário
atualizar a quantidade de combustível total na bomba. Não deve ser
possível abastecer se não tiver gasolina suficiente na bomba.
*/

class bombaCombustivel {
    
    public $tipoCombustivel;
    public $valorLitro;
    public $quantidadeCombustivel;

    public function __construct($tipoCombustivel  = "Gasolina", $valorLitro = 5, $quantidadeCombustivel = 1000) {
        $this->tipoCombustivel = $tipoCombustivel;
        $this->valorLitro = $valorLitro;
        $this->quantidadeCombustivel = $quantidadeCombustivel;
    }

    public function statusBomba() {
        echo "Esta bomba tem $this->quantidadeCombustivel litros de combustível";
        echo "<hr>";
    }

    public function abastecerPorValor($valorAbastecer) {
        $litrosAbastecido = $valorAbastecer / $this->valorLitro;

        if ($this->quantidadeCombustivel>=$litrosAbastecido) {
            $this->quantidadeCombustivel -= $litrosAbastecido;
            echo "<hr>";
            echo "Você abasteceu R$$valorAbastecer = $litrosAbastecido litros";
            echo "<hr>";
        } else {
            echo "<hr>";
            echo "Não há combustível suficiente para o seu abastecimento";
            echo "<hr>";
        }
        
        $this->statusBomba();
    }

    public function abastecerPorLitro($litrosAbastecer) {
        $valorPagar = $litrosAbastecer * $this->valorLitro;

        if ($this->quantidadeCombustivel>=$litrosAbastecer) {
            $this->quantidadeCombustivel -= $litrosAbastecer;
        echo "<hr>";
        echo "Você abasteceu $litrosAbastecer litros, pagar R$$valorPagar";
        echo "<hr>";
        } else {
            echo "<hr>";
            echo "Não há combustível suficiente para o seu abastecimento";
            echo "<hr>";
        }

        $this->statusBomba();
    }

    public function alterarValorCombustivel($novoValorLitro) {
        $this->valorLitro = $novoValorLitro;
        echo "<hr>";
        echo "Você alterou o valor do litro para R$$novoValorLitro/litro";
        echo "<hr>";
    }

    public function alterarQuantidadeCombustivel($novaQuantidadeCombustivel) {
        $this->quantidadeCombustivel = $novaQuantidadeCombustivel;
        echo "<hr>";
        echo "Você alterou a quantidade de combustível na bomba para: $novaQuantidadeCombustivel litros";
        echo "<hr>";
        $this->statusBomba();
    }


}


?>