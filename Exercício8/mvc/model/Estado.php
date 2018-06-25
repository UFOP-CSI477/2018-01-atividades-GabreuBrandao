<?php

	namespace Model;

	use Model\Database;

	class Estado{

		protected $db = null;
		private $nome;
		private $estado_id;

		public function __construct($nome, $sigla) {
			$this->db = Database::getInstance()->getDB();
			$this->nome=$nome;
			$this->sigla=$sigla;
		}

		public function all(){
			$sql = "SELECT * FROM estados ORDER BY nome";

			return $this->db->query($sql);
		}

		public function save($estado){
			$sql = $sql = "INSERT INTO estados (nome, sigla)
						VALUES ('$estado->nome','$estado->sigla')";

			$this->db->query($sql);
		}
	}