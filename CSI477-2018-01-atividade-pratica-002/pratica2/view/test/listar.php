<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../pratica2/css/bootstrap.min.css">
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/bootstrap.js"></script>
  <title>Listar</title>
</head>
<body>
  
  <h2 class="jumbotron text-center">Lista de Exames</h2>

  <table class="table table-bordered table-striped table-hover table-condensed">

    <tr>
      <th>ID</th>
      <th>ID usuário</th>
      <th>ID procedimento</th>
      <th>Data</th>
      <th>Cadastrado em</th>
      <th>Atualizado em</th>
    </tr>

    <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['user_id'] ?></td>
        <td><?= $linha['procedure_id'] ?></td>
        <td><?= $linha['date'] ?></td>
        <td><?= $linha['created_at'] ?></td>
        <td><?= $linha['updated_at'] ?></td>
      </tr>
    <?php endforeach ?>

  </table><br>  
