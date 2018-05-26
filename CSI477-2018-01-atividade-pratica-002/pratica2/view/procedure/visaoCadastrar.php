<!DOCTYPE html>
<html lang="en" dir="ltr">
<head
<meta charset="utf-8">
<link rel="stylesheet" href="../pratica2/css/bootstrap.min.css"> <!--   <link rel="stylesheet" href="./css/bootstrap.min.css">-->
<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.js"></script>
<title>Cadastrar</title>
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

  <form method="post" action="router.php?op=13" id="formlogin" name="formlogin" >
    <!-- <fieldset id="fie">
      <h4>Insira os dados</h4>
      <label>NOME:</label>
      <input type="text" name="nome" id="nome" required/><br/>
      <label>PREÇO:</label>
      <input type="text" name="preço" id="preço" required/><br/>
      <label>ID USUÁRIO:</label>
      <input type="text" name="user_id" id="user_id" required/><br/>
      <input class="btn btn-info" type="submit" value="Cadastrar"/>
    </fieldset> -->

    <h4>Insira os dados</h4><br>

    <table>
            <tr>
                <th></th>
                <th></th>
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
        <input class="btn btn-info" type="submit" value="Cadastrar"/>

  </form>

</body>
</html>
