<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de cidades</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  </head>
  <body>

    <table class="table table-bordered table-striped table-hover table-condensed">

      <tr>
        <th class="success">Código</th>
        <th class="success">Cidade</th>
        <th class="success">Estado</th>
      </tr>

      <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['nome'] ?></td>
        <td><?= $linha['sigla'] ?></td>
      </tr>
    <?php endforeach ?>

    </table>








  </body>
</html>