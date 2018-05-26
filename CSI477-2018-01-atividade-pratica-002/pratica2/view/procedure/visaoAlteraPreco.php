<!DOCTYPE html>
<html lang="en" dir="ltr">
<head
<meta charset="utf-8">
<link rel="stylesheet" href="../pratica2/css/bootstrap.min.css"> <!--   <link rel="stylesheet" href="./css/bootstrap.min.css">-->
<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.js"></script>
<title>Alterar Preço</title>
</head>
<body>
  <h3 style="color: #000000" class="jumbotron text-center">Bem vindo à Área de Operador!</h3>

  <center>
    <a href="../pratica2/router.php?op=18"><button type="button" class="btn btn-info">Listar Exames</button></a>
    <a href="../pratica2/router.php?op=19"><button type="button" class="btn btn-info">Alterar Preço</button></a>
  </center>

  <br><br>

  <table class="table table-bordered table-striped table-hover table-condensed">

    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>ID usuário</th>
      <th>Atualizado em</th>
      <th>Cadastro em</th>
    </tr>

    <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['name'] ?></td>
        <td><?= $linha['price'] ?></td>
        <td><?= $linha['user_id'] ?></td>
        <td><?= $linha['created_at'] ?></td>
        <td><?= $linha['updated_at'] ?></td>
      </tr>
    <?php endforeach ?>

  </table>

  <form method="post" action="router.php?op=22" id="formlogin" name="formlogin" >
    <!-- <fieldset id="fie">
      <br><br><br><h4>ATUALIZAR PREÇO</h4>
      <label>ID: </label>
      <input type="text" name="id" id="id" required/><br />

      <label>PREÇO:</label>
      <input type="text" name="preço" id="preço" required/><br />

      <input class="btn btn-info" type="submit" value="Atualizar"/> 
    </fieldset> -->
    <br><br><br><h4>ATUALIZAR PREÇO</h4>

    <table>
            <tr>
                <th></th>
                <th></th>
            </tr>

            <tr>
                <td align="right"><label>ID: </label></td>
                <td><input type="text" name="id" id="id" required/></td>
            </tr>

            <tr>
                <td align="right"><label>PREÇO:</label></td>
                <td><input type="text" name="preço" id="preço" required/></td>
            </tr>
    </table>
    <br>
    <input class="btn btn-info" type="submit" value="Atualizar"/> 

  </form>

</body>
</html>
