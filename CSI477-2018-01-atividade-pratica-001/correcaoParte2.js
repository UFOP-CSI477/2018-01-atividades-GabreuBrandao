$(document).ready(function(){

	$("input[name='valor1']").focusout(function(){
		//VALIDAR OS CAMPOS - valor1 e valor2

		var valor1 = parseInt( $("input[name='valor1']").val() );

		var valor2 = parseInt( $("input[name='valor2']").val() );

		//VALIDAR - valor1

		if(isNaN(valor1)){
			//Exibe alerta
			$("#alertaV1").slideDown();
			//Adiciona a classe CSS de erro
			$("#grupoV1").addClass("has-error");
			//Limpa o campo
			$("input[name='valor1']").val("");
			//Define o foco para o campo
			$("input[name='valor1']").focus();
			return;
		}

		//Valor1 - correto
		//Remover a classe de erro
		$("#grupoV1").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaV1").hide();
	});

	$("input[name='valor2']").focusout(function(){
		//VALIDAR OS CAMPOS - valor1 e valor2

		var valor1 = parseInt( $("input[name='valor1']").val() );

		var valor2 = parseInt( $("input[name='valor2']").val() );

		if(isNaN(valor2)){
			//Exibe alerta
			$("#alertaV2").slideDown();
			//Adiciona a classe CSS de erro
			$("#grupoV2").addClass("has-error");
			//Limpa o campo
			$("input[name='valor2']").val("");
			//Define o foco para o campo
			$("input[name='valor2']").focus();
			return;
		}

		//valor2 - correto
		//Remover a classe de erro
		$("#grupoV2").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaV2").hide();
	});

	$("input[name='valor3']").focusout(function(){
		//VALIDAR OS CAMPOS - valor1 e valor2

		var valor3 = parseInt( $("input[name='valor3']").val() );

		var valor2 = parseInt( $("input[name='valor2']").val() );

		//VALIDAR - valor1

		if(isNaN(valor3)){
			//Exibe alerta
			$("#alertaV3").slideDown();
			//Adiciona a classe CSS de erro
			$("#grupoV3").addClass("has-error");
			//Limpa o campo
			$("input[name='valor3']").val("");
			//Define o foco para o campo
			$("input[name='valor3']").focus();
			return;
		}

		//Valor1 - correto
		//Remover a classe de erro
		$("#grupoV3").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaV3").hide();
	});

	$("input[name='valor4']").focusout(function(){
		//VALIDAR OS CAMPOS - valor1 e valor2

		var valor4 = parseInt( $("input[name='valor4']").val() );

		var valor2 = parseInt( $("input[name='valor2']").val() );

		if(isNaN(valor4)){
			//Exibe alerta
			$("#alertaV4").slideDown();
			//Adiciona a classe CSS de erro
			$("#grupoV4").addClass("has-error");
			//Limpa o campo
			$("input[name='valor4']").val("");
			//Define o foco para o campo
			$("input[name='valor4']").focus();
			return;
		}

		//valor2 - correto
		//Remover a classe de erro
		$("#grupoV4").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaV4").hide();
	});

	$("button[name='calculo']").click(function(){

		//VALIDAR OS CAMPOS - valor1 e valor2

		var valor1 = parseInt( $("input[name='valor1']").val() );

		var valor2 = parseInt( $("input[name='valor2']").val() );

		var valor3 = parseInt( $("input[name='valor3']").val() );

		var valor4 = parseInt( $("input[name='valor4']").val() );

		//VALIDAR - valor1

		if(isNaN(valor1)){
			//Exibe alerta
			$("#alertaV1").slideDown();
			//Adiciona a classe CSS de erro
			$("#grupoV1").addClass("has-error");
			//Limpa o campo
			$("input[name='valor1']").val("");
			//Define o foco para o campo
			$("input[name='valor1']").focus();
			return;
		}

		//Valor1 - correto
		//Remover a classe de erro
		$("#grupoV1").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaV1").hide();

		//VALIDAR - valor2

		if(isNaN(valor2)){
			//Exibe alerta
			$("#alertaV2").slideDown();
			//Adiciona a classe CSS de erro
			$("#grupoV2").addClass("has-error");
			//Limpa o campo
			$("input[name='valor2']").val("");
			//Define o foco para o campo
			$("input[name='valor2']").focus();
			return;
		}

		//valor2 - correto
		//Remover a classe de erro
		$("#grupoV2").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaV2").hide();

		if(isNaN(valor3)){
			//Exibe alerta
			$("#alertaV3").slideDown();
			//Adiciona a classe CSS de erro
			$("#grupoV3").addClass("has-error");
			//Limpa o campo
			$("input[name='valor3']").val("");
			//Define o foco para o campo
			$("input[name='valor3']").focus();
			return;
		}

		//Valor1 - correto
		//Remover a classe de erro
		$("#grupoV3").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaV3").hide();

		if(isNaN(valor4)){
			//Exibe alerta
			$("#alertaV4").slideDown();
			//Adiciona a classe CSS de erro
			$("#grupoV4").addClass("has-error");
			//Limpa o campo
			$("input[name='valor4']").val("");
			//Define o foco para o campo
			$("input[name='valor4']").focus();
			return;
		}

		//Valor1 - correto
		//Remover a classe de erro
		$("#grupoV4").removeClass("has-error");

		//Ocultar o alerta - mensagem
		$("#alertaV4").hide();

		/*if($("input[name='valor1']").val() == 3 && $("input[name='valor2']").val() == 2 && $("input[name='valor2']").val() == 4 && $("input[name='valor2']").val() == 1){

			$("input[name='resp']").val("Parabéns, você acertou");
		}*/

		if($("input[name='valor1']").val() == 3 &&
			$("input[name='valor2']").val() == 2 &&
			$("input[name='valor3']").val() == 4 &&
			$("input[name='valor4']").val() == 1){

			$("input[name='resp']").val("Parabéns, você acertou!");
		}
		else{
			$("input[name='resp']").val("Sinto muito, está errado.");
		}
		

	});

});