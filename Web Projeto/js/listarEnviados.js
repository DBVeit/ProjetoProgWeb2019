$(document).ready(function(){
	$("#bListarEnviados").click(function(){
		$.ajax({
			type: "POST",
			url: "../php/rascunho.php",
			dataType: "json",
			success: function(retorno){
				var conteudo = "";

				conteudo += "<tr>";
				conteudo += "<td> <b>Remetente</b> "+ retorno.remetente +"</td>";
				conteudo += "<td> <b>Assunto</b> "+ retorno.assunto + "</td>";
				conteudo += "<td> <b>Mensagem</b> "+ retorno.texto + "</td>";
				conteudo += "</tr>";

				$("#tabelaLista").html(retorno.conteudo);
			}
		});
	});
});