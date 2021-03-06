<?php

// Includes - framework

include './model/Database.php';
include './model/Aluno.php';
include './model/Cidade.php';
include './model/Estado.php';
include './controller/AlunosController.php';
include './controller/CidadesController.php';
include './controller/EstadosController.php';


// Tratamento das rotas
use Controller\AlunosController;
use Controller\CidadesController;
use Controller\EstadosController;

$op = $_GET['op'];

// Definição das rotas
if($op==1){
	$alunoController = new AlunosController;
	$alunoController->listar();
	
}else if($op == 2){
	$cidadeController  = new CidadesController;
	$cidadeController->create();
}
else if($op == 3){
	//var_dump($_POST);

	$cidadeController = new CidadesController;
	$cidadeController->store($_POST);
}
else if ( $op == 4 ) {
  $cidadeController = new CidadesController;
  $cidadeController->listar();
}
else if( $op == 5 ){
	$estadoController = new EstadosController;
  	$estadoController->listar();
}

else if($op == 6){
	//var_dump($_POST);

	$estadoController = new EstadosController;
	$estadoController->store($_POST);
}
else if($op == 7){
	$estadoController  = new EstadosController;
	$estadoController->create();
}

else if($op == 8){
	$alunoController  = new AlunosController;
	$alunoController->create();
}

else if($op == 9){
	//var_dump($_POST);

	$alunoController = new AlunosController;
	$alunoController->store($_POST);
}