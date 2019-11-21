$(document).ready(function(){
	logar();
});

function logar(){
	$("#bAcessar").click(function(){
		$.ajax({
			type: "POST",
			url: "php/autenticacao.php",
			dataType: "json",
			data:{
				email:$("#tEmail").val(),
				senha:$("#tSenha").val()
			},
			success: function(retorno){
				if (status == 'n') {
					alert(retorno.aviso);
					window.location.href=retorno.carregar;
					return false;
				}else{
					alert(retorno.aviso);
					window.location.href=retorno.carregar;
					return true;
				}
			},
		});
	});
}