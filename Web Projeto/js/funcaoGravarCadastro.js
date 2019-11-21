$(document).ready(function(){

	$("#bConfirmar").click(function(){

		var	ajax_nome = $("#tNome").val();
		var ajax_sobrenome = $("#tSobrenome").val();
		var ajax_usuario = $("#tUsuario").val();
		var ajax_email = $("#tEmail").val();
		var ajax_senha = $("#tSenha").val();
		var ajax_confirmarSenha = $("#tConfirmarSenha").val();

		$.ajax({
			type: "POST",
			url: "../php/gravarCadastro.php",
			dataType: "json",
			data: {
				nome:ajax_nome,
				sobrenome:ajax_sobrenome,
				usuario:ajax_usuario,
				email:ajax_email,
				senha:ajax_senha,
				confirmarSenha:ajax_confirmarSenha
			},
			success: function(retorno){
				if (ajax_nome == '' || ajax_sobrenome == '' || ajax_usuario == '' || ajax_email == '' || ajax_senha == '' || ajax_confirmarSenha == '') {
					alert('Insira os dados!');
					return false;
				}else if (ajax_senha != ajax_confirmarSenha){
					alert('Senhas incompatíveis!');
					return false;
				}
				else{
					alert(retorno);
					window.location.href="../Index.html";
				}
			}
		});
	});
});