$(document).ready(function(){

	$("#bEnviar").click(function(){

		var ajax_para = $("#tPara").val();
		var ajax_copia = $("#tCopia").val();
		var ajax_assunto = $("#tAssunto").val();
		var ajax_mensagem = $("#tMensagem").val();

		$.ajax({
			type: "POST",
			url: "../php/gravarMensagem.php",
			dataType: "json",
			data: {
				para:ajax_para,
				copia:ajax_copia,
				assunto:ajax_assunto,
				mensagem:ajax_mensagem
			},
			success: function(retorno){
				alert("Mensagem enviada!");
			}
		});
	});
});