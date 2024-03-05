<?php

/*
Crie uma classe para implementar uma conta corrente. A classe
deve possuir os seguintes atributos:
a. Número da conta
b. Nome do correntista
c. Saldo
Os métodos são os seguintes:
a) Alterar nome
b) Deposito
c) Saque
No construtor, o saldo é opcional, com valor padrão zero e os
demais atributos são obrigatórios. A conta não pode ficar com saldo
negativo.
*/

class ContaBancaria {
    public $numeroConta;
    public $nomeCorrentista;
    public $saldo;
    public $valorDeposito;
    public $valorSaque;

    public function __construct($numeroConta, $nomeCorrentista, $saldo = 0) {
        $this->numeroConta = $numeroConta;
        $this->nomeCorrentista = $nomeCorrentista;
        $this->saldo = $saldo;
    }

    public function dadosCorrentista () {
        echo "<hr>";
        echo "Número da conta: $this->numeroConta<br>";
        echo "Nome do correntista: $this->nomeCorrentista<br>";
        echo "Saldo atual: R$$this->saldo<br>";
        echo "<hr>";
    }

    public function alterarNome ($nomeCorrentista) {
        $this-> nomeCorrentista = $nomeCorrentista;
        echo "<hr>";
        echo "Nome do correntista alterado";
        echo "<br>";
        echo "Nome salvo: $this->nomeCorrentista";
        $this->dadosCorrentista();
    }

    public function deposito ($valorDeposito) {
        $this-> valorDeposito = $valorDeposito;
        $this-> saldo += $valorDeposito;
        echo "<hr>";
        echo "Depósito de R$$this->valorDeposito efetuado.<br>";
        echo "Seu saldo atual é de R$$this->saldo.";
        echo "<hr>";
    }

    public function saque ($valorSaque) {
        $this-> valorSaque = $valorSaque;

        if ($this->valorSaque < $this->saldo) {
            $this-> saldo -= $valorSaque;
            echo "<hr>";
            echo "Saque de R$$this->valorSaque efetuado.<br>";
            echo "Seu saldo atual é de R$$this->saldo.";
            echo "<hr>";
        } else {
            echo "<hr>";
            echo "Saque NÃO efetuado. Saldo Insuficiente.<br>";
            echo "Seu saldo atual é de R$$this->saldo.";
            echo "<hr>";
        }

    }
    
}

?>