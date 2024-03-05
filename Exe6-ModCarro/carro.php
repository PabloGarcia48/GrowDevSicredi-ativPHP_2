<?php
/*
6. Implemente uma classe chamada Carro com as seguintes
propriedades:
a. Um veículo tem um certo consumo de combustível (medidos
em km / litro) e uma certa quantidade de combustível no
tanque.
b. O consumo é especificado no construtor e o nível de
combustível inicial é 0.
c. Forneça um método andar() que simula o ato de dirigir o
veículo por uma certa distância, reduzindo o nível de
combustível no tanque de gasolina.
d. Forneça um método obterGasolina(), que retorna o nível atual
de combustível e forneça um método adicionarGasolina(),
para abastecer o tanque.
*/

class Carro {
    public $qtdCombustivel;
    public $consumo;
    public $tamanhoTanque;

    public function __construct($qtdCombustivel = 0, $consumo  = 15, $tamanhoTanque = 60) {
        $this->qtdCombustivel = $qtdCombustivel;
        $this->consumo = $consumo;
        $this->tamanhoTanque = $tamanhoTanque;
    }

    public function statusVeiculo() {
        echo "Consumo médio do veículo é: $this->consumo km/l <br>";
        echo "Nível atual de combustível no tanque é: $this->qtdCombustivel litros<br>";
        echo "<hr>";
    }

    public function rodar($distancia) {
        $consumoTrecho = $distancia / $this->consumo;
        if ($this-> qtdCombustivel >= $consumoTrecho) {
            $this-> qtdCombustivel -= $consumoTrecho;
            echo "O veículo rodou $distancia km<br>";
            $this->statusVeiculo();
        } else {
            echo "O veículo não tem combustível para rodar esta distância<br>"; 
            echo "Para rodar $distancia km seriam necessários $consumoTrecho litros<br>"; 
            $this->statusVeiculo();
        }        
    }
    
    public function abastecer($abastecida) {
        $novaQtdCombustivel = $this->qtdCombustivel += $abastecida;
        if ($novaQtdCombustivel<=$this->tamanhoTanque) {
            $this->qtdCombustivel = $novaQtdCombustivel;
            echo "Foi abastecido $abastecida litros<br>";
            $this->statusVeiculo();
        } else {
            echo "Veículo não foi abastecido, o tanque comporta no máximo $this->tamanhoTanque litros<br>";
            $novaQtdCombustivel = $this->qtdCombustivel -= $abastecida;
            $this->statusVeiculo();
        }        
    }
}

?>