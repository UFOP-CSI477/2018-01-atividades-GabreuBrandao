
$(document).ready(function(){

	$("button[name='calculo']").click(function(){


		if(document.getElementById("sabonete").checked){

			$("input[name='resp']").val("Parabéns, você acertou!");
		}
		else{
			$("input[name='resp']").val("Sinto muito, está errado.");
		}

		if(document.getElementById("algodao").checked){
			$("input[name='resp2']").val("Parabéns, você acertou!");
		}
		else{
			$("input[name='resp2']").val("Sinto muito, está errado.");
		}

		if(document.getElementById("maquina").checked){
			$("input[name='resp3']").val("Parabéns, você acertou!");
		}
		else{
			$("input[name='resp3']").val("Sinto muito, está errado.");
		}

		if(document.getElementById("chave").checked){
			$("input[name='resp4']").val("Parabéns, você acertou!");
		}
		else{
			$("input[name='resp4']").val("Sinto muito, está errado.");
		}
	});
});