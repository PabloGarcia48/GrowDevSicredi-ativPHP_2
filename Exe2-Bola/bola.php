<?php
/*
Crie uma classe que modele uma bola:
a. Atributos
i. Cor
ii. Circunferência
iii. Material
b. Métodos
i. Trocar Cor
ii. Mostrar cor
*/

class Bola {
    public $corBola;
    public $diamentroBola;
    public $materialBola;

    public function trocarCor ($corBola) {
        $this-> corBola = $corBola;
        echo "<hr>";
        echo "Trocada a cor da bola";
        echo "<br>";
        echo "Nova cor = $this->corBola";
    }

    public function mostrarCor () {
        echo "<hr>";
        echo "A cor da bola é: $this->corBola";
        echo "<hr>";
    }
    
}



?>