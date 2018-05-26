<?php


namespace Controller;
use Model\Procedure;

class ProceduresController{

	public function listar(){
		$id = null;
		$nome = null;
		$preço = null;
		$user_id = null;

		//$procedure = new Procedure($id, $nome, $preço, $user_id);
		$procedure = new Procedure($nome, $preço, $user_id);

		$lista = $procedure->all();
		
		include '../pratica2/view/procedure/listar.php';
	}

	public function visaoCadastrar(){
		include '../pratica2/view/procedure/visaoCadastrar.php';
	}

	public function cadastrar($request){
		//$id = $request['id'];
		$nome = $request['nome'];
		$preço = $request['preço'];
		$user_id = $request['user_id'];

		//$procedure = new Procedure($id, $nome, $preço, $user_id);
		$procedure = new Procedure($nome, $preço, $user_id);
		$procedure->save($procedure);

		include '../pratica2/view/user/administradorHome.php';
	}

	public function visaoAtualizar(){
		//$id = null;
		$nome = null;
		$preço = null;
		$user_id = null;

		//$procedure = new Procedure($id, $nome, $preço, $user_id);
		$procedure = new Procedure($nome, $preço, $user_id);
		$lista = $procedure->all();

		include '../pratica2/view/procedure/visaoAtualizar.php';
	}

	public function atualizar($request){
		$id = $request['id'];
		$nome = $request['nome'];
		$preço = $request['preço'];
		$user_id = $request['user_id'];

		//$procedure = new Procedure($id, $nome, $preço, $user_id);
		$procedure = new Procedure($nome, $preço, $user_id);

		$lista = $procedure->atualizar($id, $nome, $preço, $user_id);

		header('location: ../pratica2/router.php?op=14');
	}

	public function visaoExcluir(){
		//$id = null;
		$nome = null;
		$preço = null;
		$user_id = null;

		//$procedure = new Procedure($id, $nome, $preço, $user_id);
		$procedure = new Procedure($nome, $preço, $user_id);
		$lista = $procedure->all();

		include '../pratica2/view/procedure/visaoExcluir.php';
	}

	public function excluir($request){
		$id = $request['id'];
		$nome = null;
		$preço = null;
		$user_id = null;

		//$procedure = new Procedure($id, $nome, $preço, $user_id);
		$procedure = new Procedure($nome, $preço, $user_id);
		$procedure->delete($id);

		header('location: ../pratica2/router.php?op=16');
	}

	public function visaoAlteraPreco(){
		//$id = null;
		$nome = null;
		$preço = null;
		$user_id = null;

		//$procedure = new Procedure($id, $nome, $preço, $user_id);
		$procedure = new Procedure($nome, $preço, $user_id);
		$lista = $procedure->all();

		include '../pratica2/view/procedure/visaoAlteraPreco.php';
	}

	public function atualizarPreco($request){
		$id = $request['id'];
		$nome = null;
		$preço = $request['preço'];
		$user_id = null;

		//$procedure = new Procedure($id, $nome, $preço, $user_id);
		$procedure = new Procedure($nome, $preço, $user_id);

		$lista = $procedure->atualizarPreco($id, $preço);

		header('location: ../pratica2/router.php?op=21');
	}
}