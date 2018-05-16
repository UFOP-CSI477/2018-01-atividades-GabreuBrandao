<?php


namespace Controller;
use Model\Estado;

class EstadosController{

	public function listar(){
		//Acesso ao modelo
		$estado = new Estado();

	//Manipular os dados
		$lista = $estado->all();
		
	//Invocar a View
		include './view/estados/lista.php';
	}
}