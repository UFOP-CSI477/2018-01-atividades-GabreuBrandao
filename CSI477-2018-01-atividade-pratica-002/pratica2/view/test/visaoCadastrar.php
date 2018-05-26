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
  

  <h3 style="color: #000000" class="jumbotron text-center">Bem vindo à Área de Paciente!</h3>

  <h3 style="color: #000000" class="text-center">Selecione qual função deseja fazer em relação aos exames</h3>

  <center>
    <a href="../pratica2/router.php?op=18"><button type="button" class="btn btn-info">Listar</button></a>
    <a href="../pratica2/router.php?op=19"><button type="button" class="btn btn-info">Registrar</button></a>
  </center>

  <form method="post" action="router.php?op=20" id="formlogin" name="formlogin" >
     <!-- <fieldset id="fie">
      <h4>Insira os dados</h4>

      <label>ID PROCEDIMENTO:</label>
      <input type="text" name="procedure_id" id="procedure_id" required/><br/>

      <label>DATA:</label>
      <input type="text" name="data" id="data" required/><br/>

      <input class="btn btn-info" type="submit" value="Cadastrar"/>
      </fieldset> -->
      <h4>Insira os dados</h4><br>

      <table>
            <tr>
                <th></th>
                <th></th>
            </tr>

            <tr>
                <td align="right"><label>ID PROCEDIMENTO:</label></td>
                <td><input type="text" name="procedure_id" id="procedure_id" required/></td>
            </tr>

            <tr>
                <td align="right"><label>DATA:</label></td>
                <td><input type="text" name="data" id="data" required/><br/></td>
            </tr>
      </table>
      <br>
      <input class="btn btn-info" type="submit" value="Cadastrar"/>
    
  </form>

</body>
</html>
