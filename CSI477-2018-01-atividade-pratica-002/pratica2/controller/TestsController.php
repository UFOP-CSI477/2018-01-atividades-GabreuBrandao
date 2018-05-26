<?php


namespace Controller;
use Model\Test;

class TestsController{

	public function listar(){
		$id = null;
		$user_id = null;
		$procedure_id = null;
		$data = null;

		//$test = new Test($id, $user_id, $procedure_id, $data);
		$test = new Test($user_id, $procedure_id, $data);

		$lista = $test->all();
		
		include '../pratica2/view/test/listar.php';
	}

	public function visaoCadastrar(){
		include '../pratica2/view/test/visaoCadastrar.php';
	}

	public function cadastrar($request){
		//$id = $request['id'];
		$user_id = $_SESSION['id'];
		$procedure_id = $request['procedure_id'];
		$data = $request['data'];

		//$test = new Test($id, $user_id, $procedure_id, $data);
		$test = new Test($user_id, $procedure_id, $data);
		$test->save($test);

		include '../pratica2/view/user/pacienteHome.php';
	}

	public function listarEspecifico(){
		//session_start();

		$id = null;
		$user_id = $_SESSION['id'];
		$procedure_id = null;
		$data = null;

		//$test = new Test($id, $user_id, $procedure_id, $data);
		$test = new Test($user_id, $procedure_id, $data);

		$lista = $test->listarEspecifico($user_id);

		include '../pratica2/view/test/listarEspecifico.php';
	}
}