<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<body>
    <main>
        <h1>Calendário</h1>
        <p>Clique dentro do campo e escolha a data</p>
        <form id="form" action="cadastrar.php">
            <label for="codigo">Código</label>
            <input id="codigo" name="codigo" type="number">

            <label for="nome">Nome</label>
            <input name="nome" id="nome" type="text">

            <label for="calendario">Data de nascimento:</label>
            <input id="calendario" name="calendario" type="text">

            <label for="">Salário</label>
            <input id="salario" name="salario" type="number" step="0.01">

            <input type="submit">
        </form>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>