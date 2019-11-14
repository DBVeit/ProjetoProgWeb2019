$(document).ready(function(){

	accountLogin();

});

function accountLogin(){

	$("#bAcessar").click(function(){

		$.ajax({
			type: "POST",
			url: "php/autenticacao.php",
			dataType: "json",
			data:{
				email: $("#emailLog").val(),
				senha: $("#password").val()
			},
			success: function(retorno){
				window.location.href="html/email.html";
				alert("Entrada autorizada!");
			},
			error: function(retorno){
				alert("E-Mail ou senha incorreto(s)!");
				window.location.href="Index.html";
			}
		});
	});
}