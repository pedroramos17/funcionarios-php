<?php

include_once 'funcionario.php';

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$nascimentoString = $_POST['calendario'];
$salario = $_POST['salario'];

list($day, $month, $year) = explode('/', $nascimentoString);

$nascimentoInt = (int) $day . $month . $year;

$funcionario = new Funcionario();

$funcionario->setCodigo($codigo);
$funcionario->nome = $nome;
$funcionario->setNascimento($nascimentoInt);
$funcionario->setSalario($salario);

session_start();
$_SESSION['funcionario'] = $funcionario;

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, $statusCode);
}

redirect("/", 201);
?>