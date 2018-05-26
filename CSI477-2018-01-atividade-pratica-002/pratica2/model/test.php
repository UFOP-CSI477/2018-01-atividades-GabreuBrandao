<?php

namespace Model;
use Model\Database;
use DateTime;

class Test{

	protected $db= null;
	public $id;
	public $user_id;
	public $procedure_id;
	public $data;
	public $create;
	public $update;

	//public function __construct($id, $user_id, $procedure_id, $data){
	public function __construct($user_id, $procedure_id, $data){
		$this->db= Database::getInstance()->getDB();

		$dt = new DateTime();
      	$dat = $dt->format('Y-m-d H:i:s');
      	//$this->id = $id;
      	$this->id = 0;
      	$this->user_id = $user_id;
      	$this->procedure_id = $procedure_id;
      	$this->data = $data;
      	$this->create= $dat;
      	$this->update = $dat;
	}

	public function all(){
		$sql ="SELECT * FROM tests ORDER BY date DESC";
		return $this->db->query($sql);
	}

	public function save($test){
		/*$sql = $sql = "INSERT INTO tests (id, user_id, procedure_id, date, created_at, updated_at)
		VALUES ('$test->id', '$test->user_id', '$test->procedure_id', '$test->data', '$test->create','$test->update')";*/
		$sql = $sql = "INSERT INTO tests (user_id, procedure_id, date, created_at, updated_at)
		VALUES ('$test->user_id', '$test->procedure_id', '$test->data', '$test->create','$test->update')";

		$this->db->query($sql);
	}

	public function listarEspecifico($user_id){
		$sql ="SELECT * FROM tests WHERE user_id=$user_id ORDER BY date DESC";

		return $this->db->query($sql);
	}
}