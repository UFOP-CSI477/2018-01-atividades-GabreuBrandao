<?php


namespace Controller;
use Model\Aluno;

class AlunosController{

	public function create(){

		include './view/alunos/create.php';			
	}

	public function listar(){
		//Acesso ao modelo
		$aluno = new Aluno();

	//Manipular os dados
		$lista = $aluno->all();
		
	//Invocar a View
		include './view/alunos/lista.php';
	}

	public function store($request){
		//$id = $request['id'];
		$nome = $request['nome'];
		$email = $request['email'];

		//$procedure = new Procedure($id, $nome, $preço, $user_id);
		$aluno = new Aluno($nome, $email);
		$email->save($aluno);
	}
}