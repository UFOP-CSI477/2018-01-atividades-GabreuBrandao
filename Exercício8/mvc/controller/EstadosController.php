<?php


namespace Controller;
use Model\Estado;

class EstadosController{

	public function create(){

		include './view/estados/create.php';			
	}

	public function listar(){
		//Acesso ao modelo
		$nome = null;
		$sigla = null;

		$estado = new Estado($nome, $sigla);

	//Manipular os dados
		$lista = $estado->all();
		
	//Invocar a View
		include './view/estados/lista.php';
	}

	public function store($request){
		$nome = $request['nome'];
		$sigla = $request['sigla'];


		$estado = new Estado($nome, $sigla);

		$estado->save($estado);
	}
}