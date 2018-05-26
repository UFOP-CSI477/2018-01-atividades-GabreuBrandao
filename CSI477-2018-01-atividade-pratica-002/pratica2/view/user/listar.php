<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../atividade2MVC/css/bootstrap.min.css"> <!-- <link rel="stylesheet" href="/atividade2MVC/css/bootstrap.min.css"> -->
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/bootstrap.js"></script>
  <title>Lista de alunos(as)</title>
</head>
<body>

  <h2 class="jumbotron text-center">Lista de Usuários</h2>

  <table class="table table-bordered table-striped table-hover table-condensed">

    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Senha</th>
      <th>Tipo</th>
      <th>Cadastrado em</th>
      <th>Atualizado em</th>
    </tr>

    <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['name'] ?></td>
        <td><?= $linha['email'] ?></td>
        <td><?= $linha['password'] ?></td>
        <td><?= $linha['type'] ?></td>
        <td><?= $linha['created_at'] ?></td>
        <td><?= $linha['updated_at'] ?></td>
      </tr>
    <?php endforeach ?>

  </table><br>
