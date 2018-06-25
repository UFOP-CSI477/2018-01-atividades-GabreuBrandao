<!DOCTYPE html>
<html>
<head>
	<title>Inserir Estados</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<form method="post" action="router.php?op=6">
		
		<label for="nome">Nome:</label>
		<input type="text" name="nome">

		<label for="sigla">Sigla:</label>
		<input type="text" name="sigla">

		<input class="btn btn-info" type="submit" value="Cadastrar">

		<input class="btn btn-warning" type="reset" value="Limpar">

	</form>
</body>
</html>