<?php

include_once 'funcionario.php';

$base_url = "127.0.0.1/php-oop";

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$salario = $_POST['salario'];

$funcionario = new Funcionario();

$funcionario->setCodigo($codigo);
$funcionario->nome = $nome;
$funcionario->setNascimento($nascimento);
$funcionario->setSalario($salario);

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}

redirect($base_url, 201);
?>