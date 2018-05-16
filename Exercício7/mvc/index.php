<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Controle Acadêmico</title>
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
    <a href="router.php?op=1">Listar Alunos</a>
    <!-- <a href="router.php?op=2">Inserir Cidade</a> -->
    <a href="router.php?op=4">Listar cidade</a>
    <a href="router.php?op=5">Listar estado</a>
  </body>
</html>
