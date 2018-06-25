<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle Acadêmico</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>

  	<?php

  		session_start();

  		if( isset($_SESSION['mensagem']) ){
  			echo "<h2>" . $_SESSION['mensagem'] . "<h2>" ;
  			unset($_SESSION['mensagem']);
  		}

  	?>

    <!-- Links //-->
    <a href="router.php?op=7"><button class="btn btn-info">Inserir Estado</button></a></a>
    <a href="router.php?op=5"><button class="btn btn-info">Listar Estados</button></a></a>
    <a href="router.php?op=2"><button class="btn btn-info">Inserir Cidade</button></a></a>
    <a href="router.php?op=4"><button class="btn btn-info">Listar Cidades</button></a></a>
    <a href="router.php?op=8"><button class="btn btn-info">Inserir Aluno</button></a>
    <a href="router.php?op=1"><button class="btn btn-info">Listar Alunos</button></a>
  </body>
</html>
