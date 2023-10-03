<?php

class Funcionario
{
    private int $codigo;
    public string $nome;
    private string $nascimento;
    protected float $salario;

    function setSalario(float $salario)
    {
        if (is_numeric($salario) && ($salario > 0)) {
            $this->salario = $salario;
        }
    }
    function getSalario(): float
    {
        return $this->salario;
    }

    function setCodigo(int $codigo)
    {
        if (is_numeric($codigo) && ($codigo > 0)) {
            $this->codigo = $codigo;
        }
    }
    function getCodigo(): int
    {
        return $this->codigo;
    }

    function setNascimento(string $nascimento)
    {
        if (is_numeric($nascimento) && ($nascimento > 0)) {
            $this->nascimento = $nascimento;
        }
    }
    function getNascimento(): string
    {
        return $this->salario;
    }
}