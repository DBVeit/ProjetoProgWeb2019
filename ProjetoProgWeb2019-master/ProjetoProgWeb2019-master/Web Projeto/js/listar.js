$(document).ready(function(){
	$("#bListar").click(function(){
		$.ajax({
			type: "POST",
			url: "../php/listarEmail.php",
			dataType: "json",
			success: function(retorno){
				var conteudo = "";

				conteudo += "<table>";
				conteudo += "<tr>";
				conteudo += "<td> <b>Nome</b> </td>";
				conteudo += "<td> <b>Sobrenome</b> </td>";
				conteudo += "<td> <b>E-Mail</b> </td>";

				conteudo += "<tr>";
				conteudo += "<td>" + retorno.remetente + "</td>";
				conteudo += "<td>" + retorno.assunto + "</td>";
				conteudo += "<td>" + retorno.mensagem + "</td>";
				conteudo += "</tr>";

				conteudo += "</table>";

				$("#divLista").html(conteudo);
			}
		});
	});
});