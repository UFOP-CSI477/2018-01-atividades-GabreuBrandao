<!DOCTYPE html>
<html lang="en" dir="ltr">
<head
<meta charset="utf-8">
<link rel="stylesheet" href="../pratica2/css/bootstrap.min.css"> <!--   <link rel="stylesheet" href="./css/bootstrap.min.css">-->
<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.js"></script>
<title>Atualizar</title>
</head>
<body>

  <h3 style="color: #000000" class="jumbotron text-center">Bem vindo à Área de Administrador!</h3>

  <h3 style="color: #000000" class="text-center">Selecione qual função deseja fazer em relação aos procedimentos</h3>

  <center>
    <a href="../pratica2/router.php?op=11"><button type="button" class="btn btn-info">Listar</button></a>
    <a href="../pratica2/router.php?op=12"><button type="button" class="btn btn-info">Cadastrar</button></a>
    <a href="../pratica2/router.php?op=14"><button type="button" class="btn btn-info">Atualizar</button></a>
    <a href="../pratica2/router.php?op=16"><button type="button" class="btn btn-info">Excluir</button></a>
  </center>

  <br><br>

  <center>
    <a href="../pratica2/router.php?op=3"><button type="button" class="btn btn-info">Criar Novo Administrador</button></a>
  </center>

  <br><br>

  <center><a href="../pratica2/router.php?op=4"><button type="button" class="btn btn-info">Listar Todos Usuários</button></a></center>

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

  <form method="post" action="router.php?op=15" id="formlogin" name="formlogin" >
    <!-- <fieldset id="fie">
      <h4>Insira os dados</h4>
      <label>ID: </label>
      <input type="text" name="id" id="id" required/><br />
      <label>NOME:</label>
      <input type="text" name="nome" id="nome" required/><br />
      <label>PREÇO:</label>
      <input type="text" name="preço" id="preço" required/><br />
      <label>ID USUÁRIO:</label>
      <input type="text" name="user_id" id="user_id" required/><br />
      <input class="btn btn-info" type="submit" value="ATUALIZAR"  />
    </fieldset> -->
    <h4>Insira os dados</h4><br>

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
                <td align="right"><label>NOME:</label></td>
                <td><input type="text" name="nome" id="nome" required/></td>
            </tr>

            <tr>
                <td align="right"><label>PREÇO:</label></td>
                <td><input type="text" name="preço" id="preço" required/></td>
            </tr>

            <tr>
                <td align="right"><label>ID USUÁRIO:</label></td>
                <td><input type="text" name="user_id" id="user_id" required/></td>
            </tr>
        </table>
        <br>
        <input class="btn btn-info" type="submit" value="Atualizar"/>

  </form>

</body>
</html>
