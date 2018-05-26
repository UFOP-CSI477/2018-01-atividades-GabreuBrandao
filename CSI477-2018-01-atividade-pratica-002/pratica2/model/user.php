<?php

  namespace Model;
  use Model\Database;
  use DateTime;
  use PDO;

  class User{
    protected $db = null;
    public $id=0;
    public $nome;
    public $email;
    public $senha;
    public $type;
    public $token;
    public $create;
    public $update;

    public function __construct($nome, $email, $senha, $type){
      $this->db = Database::getInstance()->getDB();
      $dt = new DateTime();
      $data = $dt->format('Y-m-d H:i:s');
      $this->id = 0;
      $this->nome = $nome;
      $this->email = $email;
      $this->senha = $senha;
      $this->type = $type;
      $this->token = 4;
      $this->create= $data;
      $this->update = $data;
    }

    public function all(){
      $sql = "SELECT * FROM users ORDER BY name";
      return $this->db->query($sql);
    }

    public function save($user) {
      $sql = $sql = "INSERT INTO users (name, email, password, type, remember_token, created_at, updated_at)
      VALUES ('$user->nome','$user->email','$user->senha','$user->type','$user->token','$user->create','$user->update')";

      $this->db->query($sql);
    }

   public function validate($nome,$password){
     $login=$nome;
     $senha=$password;

     $sql = "SELECT * FROM `users` WHERE `name` = '$login' AND `password`= '$senha'";

     $result = $this->db->query($sql);
     $rows = $result->fetchAll(PDO::FETCH_ASSOC);
     
     if( !empty($rows) )
     {
       foreach($rows as $output) {
         if ($output['type'] == 1) {
            session_start();
            $_SESSION['type'] = 1;
            $_SESSION['id'] = $output['id'];

            $retorno = 1;
            return $retorno;
           
         }
         else if ($output['type'] == 2) {
            session_start();
            $_SESSION['type'] = 2;
            $_SESSION['id'] = $output['id'];

           $retorno = 2;
           return $retorno;
         }
         else if($output['type'] == 3){
            session_start();
            $_SESSION['type'] = 3;
            $_SESSION['id'] = $output['id'];

            $retorno = 3;
            return $retorno;
         }
       }
     }
    else{
       unset ($_SESSION['login']);
       unset ($_SESSION['senha']);
       header('location: ../pratica2/view/user/usuarioNaoEncontrado.php');
     }
   }
 }
