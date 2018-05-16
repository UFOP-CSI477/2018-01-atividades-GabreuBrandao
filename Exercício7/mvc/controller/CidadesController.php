<?php

	namespace Controller;

	use Model\Cidade;
	use Model\Estado;


	class CidadesController{

		public function listar(){
			// Acesso ao Modelo
   	 		$cidade = new Cidade;
    		// Manipular dados
    		$lista = $cidade->all();
   			// Invocar a View
    		include './view/cidades/lista.php';
		}


		//EXIBIR O FORMULÁRIO PARA INSERÇÃO DE CIDADE

		public function create(){

			$estados = new Estado;
			$lista = $estados->all();

			//exibir a view

			include './view/cidades/create.php';			
		}

		public function store($request){
			$nome = $request['nome'];
			$estado_id = $request['estado_id'];

			//$cidade = new Cidade($nome, $estado_id);

			$cidade = new Cidade();
			$cidade->setNome($nome);
			$cidade->setEstadoId($estado_id);
			$cidade->save();

			session_start();
			$_SESSION['mensagem'] = "Cidade inserida com sucesso.";

			//$cidade->listar();

			$this->redir();
		}

		private function redir(){
			header("Location: http://localhost/Web/mvc/");
			exit();
		}
	}