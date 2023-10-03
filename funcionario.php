<?php

class Funcionario {
    private int $codigo;
    public string $nome;
    private string $nascimento;
    protected float $salario;

    function setSalario(float $salario) {
        if(is_numeric($salario) && ($salario > 0)) {
            $this->salario = $salario;
        }
    }
    function getSalario(): float {
        return $this->salario;
    }
}