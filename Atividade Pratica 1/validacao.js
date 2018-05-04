/* VALIDAR OS CAMPOS DO FORMULÁRIO

OPERAR - SOMA */


//AGUARDAR QUE O DOCUMENTO ESTEJA COMPLETO - CARREGADO

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

	$("button[name='calculo']").click(function(){

		//VALIDAR OS CAMPOS - valor1 e valor2

		var valor1 = parseFloat( $("input[name='valor1']").val() );

		var valor2 = parseFloat( $("input[name='valor2']").val() );

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


		//OPERAR

		var res = valor1 / (valor2 * valor2);

		var res2 = 24 * (valor2 * valor2);

		//APRESENTAR O RESULTADO

		if(res < 18.5){
			$("input[name='res']").val(res);
			$("input[name='cla']").val("Subnutrição");
			$("input[name='ideal']").val(res2);
		}
		else if(res >= 18.5 && res <= 24.9){
			$("input[name='res']").val(res);
			$("input[name='cla']").val("Peso Saudável");
			$("input[name='ideal']").val("Já se encontra no peso ideal");
		}
		else if(res >=25 && res <=29.9){
			$("input[name='res']").val(res);
			$("input[name='cla']").val("Sobrepeso");
			$("input[name='ideal']").val(res2);
		}
		else if(res >= 30 && res <= 34.9){
			$("input[name='res']").val(res);
			$("input[name='cla']").val("Obesidade grau 1");
			$("input[name='ideal']").val(res2);
		}
		else if(res > 35 && res <= 39.9){
			$("input[name='res']").val(res);
			$("input[name='cla']").val("Obesidade grau 2");
			$("input[name='ideal']").val(res2);
		}
		else if(res >= 40){
			$("input[name='res']").val(res);
			$("input[name='cla']").val("Obesidade grau 3");
			$("input[name='ideal']").val(res2);
		}


		$("input[name='res']").val(res);

	});

});