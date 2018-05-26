<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<form method="post" action="router.php?op=0" id="formlogin" name="formlogin" >

	<fieldset id="fie">

		<h2 class="jumbotron text-center">Área geral</h2>

		<table>
            <tr>
                <th></th>
                <th></th>
            </tr>

            <tr>
                <td align="right"><label>NOME:</label></td>
                <td><input type="text" name="login" id="login" required/></td>
            </tr>

            <tr>
                <td align="right"><label>SENHA:</label></td>
                <td><input type="password" name="senha" id="senha" required/><br/></td>
            </tr>
      </table>

		&nbsp;<input class="btn btn-info" type="submit" value="Login"/><br>
	</fieldset>

</form><br>

<h4>&nbsp;Para se cadastrar clique no botão abaixo</h4>
&nbsp;<a href="router.php?op=1"><button type="button" class="btn btn-info">Cadastrar</button></a>

<br><br><br><h4>&nbsp;Para listar os procedimentos clique no botão abaixo.</h4>
&nbsp;<a href="../pratica2/router.php?op=11"><button type="button" class="btn btn-info">Listar</button></a>
