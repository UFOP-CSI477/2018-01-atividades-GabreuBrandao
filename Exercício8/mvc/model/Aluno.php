<?php
namespace Model;
use Model\Database;

	class Aluno{
		protected $db= null;
		private $nome;
		private $email;

		public function __construct($nome, $email){
			$this->db= Database::getInstance()->getDB();

			$this->nome=$nome;
			$this->email=$email;
		}

		public function all(){
			$sql ="SELECT * FROM alunos ORDER BY nome";
			return $this->db->query($sql);
		}

		public function save($aluno){
			$sql = $sql = "INSERT INTO alunos (nome, email)
			VALUES ('$aluno->nome','$aluno->email')";
			
			$this->db->query($sql);
	}
}