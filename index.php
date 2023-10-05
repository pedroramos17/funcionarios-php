<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<body>
  <div class="container">
    <main>
        <h1>Cadastro</h1>
        <form class="form" action="cadastrar.php" method="POST">
            <label for="codigo">Código<span class="req">*</span></label>
            <input id="codigo" name="codigo" type="number" required>

            <label for="nome">Nome<span class="req">*</span></label>
            <input name="nome" id="nome" type="text" required>

            <label for="calendario">Data de nascimento<span class="req">*</span></label>
            <input id="calendario" name="calendario" type="text" required>

            <label for="">Salário<span class="req">*</span></label>
            <input id="salario" name="salario" type="number" step="0.01" required>

            <input type="submit" value="Cadastrar" >
        </form>
    </main>

    <aside class="list">
      <ul class="body-list">
        <h2>Último cadastro adicionado</h2>
        <?php
        foreach ($_SESSION['funcionario'] as $key => $value) {
          echo "<li>$value</li>";
        } ?>
      </ul>
    </aside>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>