/* VALIDAR OS CAMPOS DO FORMULÁRIO

OPERAR - SOMA */


//AGUARDAR QUE O DOCUMENTO ESTEJA COMPLETO - CARREGADO

$(document).ready(function(){

	$("input[name='telefone']").focusout(function(){
		//VALIDAR OS CAMPOS - valor1 e valor2

		var valor1 = parseInt( $("input[name='telefone']").val() );

		//VALIDAR - valor1

		if(isNaN(valor1)){
			//Exibe alerta
			$("#alertaTel").slideDown();
			//Adiciona a classe CSS de erro
			$("#telefon").addClass("has-error");
			//Limpa o campo
			$("input[name='telefone']").val("");
			//Define o foco para o campo
			$("input[name='telefone']").focus();
			return;
		}

		//Valor1 - correto
		//Remover a classe de erro
		$("#telefon").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaTel").hide();
	});

	$("input[name='cpf']").focusout(function(){
		//VALIDAR OS CAMPOS - valor1 e valor2

		var valor2 = parseInt( $("input[name='cpf']").val() );

		if(isNaN(valor2)){
			//Exibe alerta
			$("#alertaCPF").slideDown();
			//Adiciona a classe CSS de erro
			$("#cepefi").addClass("has-error");
			//Limpa o campo
			$("input[name='cpf']").val("");
			//Define o foco para o campo
			$("input[name='cpf']").focus();
			return;
		}

		//valor2 - correto
		//Remover a classe de erro
		$("#cepefi").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaCPF").hide();
	});

	$("button[name='cadastro']").click(function(){

		//VALIDAR OS CAMPOS - valor1 e valor2

		var valor1 = parseInt( $("input[name='telefone']").val() );

		var valor2 = parseInt( $("input[name='cpf']").val() );

		//VALIDAR - valor1

		

		//VALIDAR - valor2

		

		if( $("#cidade").val() == "0" ){
			alert("Selecione a cidade.");
			$("#cidade").focus();
		}
		/*else{
			alert( $("#cidade option:selected").text() );
		}*/


		if(document.getElementById("futebol").checked==false || document.getElementById("basquete").checked==false || document.getElementById("handball").checked==false
			|| document.getElementById("maratona").checked==false){
			alert("Você deve selecionar pelo menos uma área de interesse.");
		}

		var valNome = ( $("input[name='nome']").val() );

		if(valNome==""){
			/*alert("Campo de senha vazio.");
			$("#senha").focus();*/

			//Exibe alerta
			$("#alertaNome").slideDown();
			//Adiciona a classe CSS de erro
			$("#nome").addClass("has-error");
			//Limpa o campo
			$("input[name='nome']").val("");
			//Define o foco para o campo
			$("input[name='nome']").focus();
			return;
		}

		$("#nome").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaNome").hide();

		var valData = ( $("input[name='data']").val() );

		if(valData==""){
			/*alert("Campo de senha vazio.");
			$("#senha").focus();*/

			//Exibe alerta
			$("#alertaData").slideDown();
			//Adiciona a classe CSS de erro
			$("#data").addClass("has-error");
			//Limpa o campo
			$("input[name='data']").val("");
			//Define o foco para o campo
			$("input[name='data']").focus();
			return;
		}

		$("#data").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaData").hide();

		var valEnd = ( $("input[name='endereco']").val() );

		if(valEnd==""){
			/*alert("Campo de senha vazio.");
			$("#senha").focus();*/

			//Exibe alerta
			$("#alertaEnd").slideDown();
			//Adiciona a classe CSS de erro
			$("#end").addClass("has-error");
			//Limpa o campo
			$("input[name='endereco']").val("");
			//Define o foco para o campo
			$("input[name='endereco']").focus();
			return;
		}

		$("#end").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaEnd").hide();

		if(isNaN(valor1)){
			//Exibe alerta
			$("#alertaTel").slideDown();
			//Adiciona a classe CSS de erro
			$("#telefon").addClass("has-error");
			//Limpa o campo
			$("input[name='telefone']").val("");
			//Define o foco para o campo
			$("input[name='telefone']").focus();
			return;
		}

		//Valor1 - correto
		//Remover a classe de erro
		$("#telefon").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaTel").hide();

		if(isNaN(valor2)){
			//Exibe alerta
			$("#alertaCPF").slideDown();
			//Adiciona a classe CSS de erro
			$("#cepefi").addClass("has-error");
			//Limpa o campo
			$("input[name='cpf']").val("");
			//Define o foco para o campo
			$("input[name='cpf']").focus();
			return;
		}

		//valor2 - correto
		//Remover a classe de erro
		$("#cepefi").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaCPF").hide();


		var valUsuario = ( $("input[name='usuario']").val() );

		if(valUsuario==""){
			/*alert("Nome de usuário não selecionado.");
			$("#usuario").focus();*/

			//Exibe alerta
			$("#alertaUsu").slideDown();
			//Adiciona a classe CSS de erro
			$("#usu").addClass("has-error");
			//Limpa o campo
			$("input[name='usuario']").val("");
			//Define o foco para o campo
			$("input[name='usuario']").focus();
			return;
		}
		$("#usu").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaUsu").hide();

		var valSenha = ( $("input[name='senha']").val() );

		if(valSenha==""){
			/*alert("Campo de senha vazio.");
			$("#senha").focus();*/

			//Exibe alerta
			$("#alertaSen").slideDown();
			//Adiciona a classe CSS de erro
			$("#sen").addClass("has-error");
			//Limpa o campo
			$("input[name='senha']").val("");
			//Define o foco para o campo
			$("input[name='senha']").focus();
			return;
		}

		$("#sen").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaSen").hide();


	});

});