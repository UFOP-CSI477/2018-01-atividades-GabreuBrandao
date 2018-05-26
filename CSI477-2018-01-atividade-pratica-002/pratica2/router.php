<?php

  include './model/Database.php';
  include './model/user.php';
  include './model/procedure.php';
  include './model/test.php';
  include './controller/UsersController.php';
  include './controller/ProceduresController.php';
  include './controller/TestsController.php';

  use Controller\UsersController;
  use Controller\ProceduresController;
  use Controller\TestsController;

  $op = $_GET['op'];

  if ($op == 0){
    $userController = new UsersController();
    $userController->validar($_POST);
  }

  else if ($op == 1){                               //LIVRE
    $userController = new UsersController();
    $userController->visaoCadastrarPaciente();
  }

  else if($op == 2){                              //LIVRE
    $usersController = new UsersController();
    $usersController->salvaPaciente($_POST);
  }

  else if($op == 3){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==1){
      $usersController = new UsersController();
      $usersController->visaoCadastrarAdmin();
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if($op == 4){
     session_start();
    $tipo = $_SESSION['type'];

    if($tipo==1){
      $usersController = new UsersController();
      $usersController->listarTodos();
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  /*else if($op == 5){
    $usersController = new UsersController();
    $usersController->viewAdmin();
  }

  else if($op == 6){
    $usersController = new UsersController();
    $usersController->viewExcluir();
  }

  else if($op == 7){
    $usersController = new UsersController();
    $usersController->excluir($_POST);
  }*/

  else if($op == 8){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==1){
      $usersController = new UsersController();
      $usersController->salvaAdmin($_POST);
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  /*else if($op == 9){
    $usersController = new UsersController();
    $usersController->adminAtualiza();
  }

  else if($op == 10){
    $usersController = new UsersController();
    $usersController->atualiza($_POST);
  }*/

  else if($op == 11){
    $proceduresController = new ProceduresController();
    $proceduresController->listar();
  }

  else if($op == 12){
    $proceduresController = new ProceduresController();
    $proceduresController->visaoCadastrar();
  }

  else if($op == 13){
    $proceduresController = new ProceduresController();
    $proceduresController->cadastrar($_POST);
  }

  else if($op == 14){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==1){
      $proceduresController = new ProceduresController();
      $proceduresController->visaoAtualizar();
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if($op == 15){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==1){
      $proceduresController = new ProceduresController();
      $proceduresController->atualizar($_POST);
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if($op == 16){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==1){
      $proceduresController = new ProceduresController();
      $proceduresController->visaoExcluir();
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if($op == 17){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==1){
      $proceduresController = new ProceduresController();
      $proceduresController->excluir($_POST);
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if($op == 18){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo == 2){
      $testsController = new TestsController();
      $testsController->listar();
    }
    else if($tipo == 1){
      $testsController = new TestsController();
      $testsController->listar();
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if($op == 19){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==3){
      $testsController = new TestsController();
      $testsController->visaoCadastrar();
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if($op == 20){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==3){
      $testsController = new TestsController();
      $testsController->cadastrar($_POST);
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if($op == 21){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==2){
      $proceduresController = new ProceduresController();
      $proceduresController->visaoAlteraPreco();
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if($op == 22){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==2){
      $proceduresController = new ProceduresController();
      $proceduresController->atualizarPreco($_POST);
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if ($op == 23) {
    header('location: ../pratica2/index.php');
  }

  else if($op == 24){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==3){
      $testsController = new TestsController();
      $testsController->listarEspecifico();
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }

  else if($op == 25){
    session_start();
    $tipo = $_SESSION['type'];

    if($tipo==3){
      $testsController = new TestsController();
      $testsController->listarEspecifico();
    }
    else{
      header('location: ../pratica2/view/user/naoLogado.php');
    }
  }