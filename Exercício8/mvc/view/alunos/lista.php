<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Alunos</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

	<table class="table table-bordered table-striped table-hover table-condensed">

		<tr class="success">
			<th>Matrícula</th>
			<th>Nome</th>
		</tr>

		<?php foreach( $lista as $linha ): ?>

			<tr>
				<td><?= $linha['id'] ?></td>     <!-- fazer "< ? =" é o mesmo que ?php echo $linha['id'] -->
				<td><?= $linha['nome'] ?></td>
			</tr>

		<?php endforeach ?>

	</table>

</body>
</html>