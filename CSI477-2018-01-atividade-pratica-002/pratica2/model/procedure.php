<?php

namespace Model;
use Model\Database;
use DateTime;

class Procedure{

	protected $db= null;
	public $id;
	public $nome;
	public $preço;
	public $user_id;
	public $create;
	public $update;

	//public function __construct($id, $nome, $preço, $user_id){
	public function __construct($nome, $preço, $user_id){
		$this->db= Database::getInstance()->getDB();

		$dt = new DateTime();
      	$data = $dt->format('Y-m-d H:i:s');
      	//$this->id = $id;
      	$this->id = 0;
      	$this->nome = $nome;
      	$this->preço = $preço;
      	$this->user_id = $user_id;
      	$this->create= $data;
      	$this->update = $data;
	}

	public function all(){
		$sql ="SELECT * FROM procedures ORDER BY name";
		return $this->db->query($sql);
	}

	public function save($procedure){
		/*$sql = $sql = "INSERT INTO procedures (id, name, price, user_id, created_at, updated_at)
		VALUES ('$procedure->id','$procedure->nome','$procedure->preço','$procedure->user_id','$procedure->create','$procedure->update')";*/
		$sql = $sql = "INSERT INTO procedures (name, price, user_id, created_at, updated_at)
		VALUES ('$procedure->nome','$procedure->preço','$procedure->user_id','$procedure->create','$procedure->update')";
		$this->db->query($sql);
	}

	public function atualizar($id, $nome, $preço, $user_id){
		$sql = "UPDATE procedures
			SET name = '$nome', price='$preço', user_id = '$user_id'
			WHERE id=$id";

		$this->db->query($sql);
	}

	public function delete($id2){
		$id = $id2;

		$sql = "DELETE FROM `procedures` WHERE `id` = '$id'";
		
		$result = $this->db->query($sql);
	}

	//public function atualizarPreco($id, $nome, $preço, $user_id){
	public function atualizarPreco($id, $preço){
		$sql = "UPDATE procedures
			SET price='$preço'
			WHERE id=$id";

		$this->db->query($sql);
	}
}