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

		var res = Math.log10(valor1) + 3 * Math.log10(8 * valor2) - 2.92;

		//APRESENTAR O RESULTADO

		if(res < 3.5){
			$("input[name='mag']").val(res);
			$("input[name='efei']").val("Geralmente não sentido mas gravado.");
		}
		else if(res >= 3.5 && res <= 5.4){
			$("input[name='mag']").val(res);
			$("input[name='efei']").val("Geralmente sentido, mas raramente causa danos.");
		}
		else if(res >=5.5 && res <=6){
			$("input[name='mag']").val(res);
			$("input[name='efei']").val("No máximo causa pequenos danos à prédios bens contruídos, mas pode danificar seriamente casas mal construídas em regiões próximas.");
		}
		else if(res >= 6.1 && res <= 6.9){
			$("input[name='mag']").val(res);
			$("input[name='efei']").val("Pode ser destrutivo em áreas em torno de até 100 km do epicentro.");
		}
		else if(res > 7 && res <= 7.9){
			$("input[name='mag']").val(res);
			$("input[name='efei']").val("Grande terremoto. Pode causar sérios danos numa grande faixa.");
		}
		else if(res >= 8){
			$("input[name='mag']").val(res);
			$("input[name='efei']").val("Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros");
		}


		$("input[name='res']").val(res);

	});

});