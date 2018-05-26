<?php

namespace Controller;
use Model\User;

class UsersController {

    public function visaoCadastrarPaciente() {
      $log = null;
      $pas = null;
      include '../pratica2/view/user/visaoCadastrarPaciente.php';
    }

    public function salvaAdmin($request) {   
      $nome = $request['login'];
      $email = $request['email'];
      $senha = $request['senha'];
      $type = 1;
      $user = new User($nome,$email,$senha, $type);
      $user->save($user);
      include '../pratica2/view/user/administradorHome.php';
    }

    public function salvaPaciente($request) {   
      $nome = $request['login'];
      $email = $request['email'];
      $senha = $request['senha'];
      $type = 3;
      $user = new User($nome, $email, $senha, $type);
      $user->save($user);
      header('location: ../pratica2/router.php?op=1');
    }

    public function listarTodos(){
      $nome = null;
      $email = null;
      $senha = null;
      $type=null;
      $user = new User($nome,$email,$senha, $type);
      $lista = $user->all();
      include '../pratica2/view/user/listar.php';
    }

    public function validar($request){
      $nome = $request['login'];
      $email = null;
      $senha = $request['senha'];
      $type = null;
      $user = new User($nome,$email,$senha, $type);
      $retorno = $user->validate($nome,$senha);

      if($retorno == 1){
        $log=$nome;
        $pas=$senha;
        include '../pratica2/view/user/administradorHome.php';
      }
      else if($retorno == 2){
        $log=$nome;
        $pas=$senha;
        include '../pratica2/view/user/operadorHome.php';
      }
      else if($retorno == 3){
        $log=$nome;
        $pas=$senha;
        include '../pratica2/view/user/pacienteHome.php';
      }

    }

    public function visaoCadastrarAdmin(){
      include '../pratica2/view/user/visaoCadastrarAdmin.php';
    }
  }
