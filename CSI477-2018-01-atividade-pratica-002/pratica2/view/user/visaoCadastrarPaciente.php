<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastrar Paciente</title>
</head>
<body>

    <form method="post" action="router.php?op=2" id="formlogin" name="formlogin" >
        <!-- <fieldset id="fie">
            <h2 class="jumbotron text-center">Cadastro de Paciente</h2>
            <h4>Insira os dados</h4>
            <label>NOME:</label>
            <input type="text" name="login" id="login" required/><br/>
            <label>E-MAIL:</label>
            <input type="text" name="email" id="email" required/><br/>
            <label>SENHA:</label>
            <input type="password" name="senha" id="senha" required/><br />
            <input class="btn btn-info" type="submit" value="Cadastrar"/>
        </fieldset> -->
        <h2 class="jumbotron text-center">Cadastro de Paciente</h2>
        <h4>Insira os dados</h4>

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
                <td align="right"><label>E-MAIL:</label></td>
                <td><input type="text" name="email" id="email" required/></td>
            </tr>

            <tr>
                <td align="right"><label>SENHA:</label></td>
                <td><input type="password" name="senha" id="senha" required/></td>
            </tr>
        </table>
        <br>
        <input class="btn btn-info" type="submit" value="Cadastrar"/>
    </form>
    
</body>
</html>
