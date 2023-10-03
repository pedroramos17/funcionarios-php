<?php
    class Estagiario extends Funcionario {
    function getSalario(): float {
        return $this->salario * 1.12;
    }
}