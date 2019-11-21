<?php
	
	$email = trim($_POST['email']);
	$senha = trim($_POST['senha']);

	if ($email == "admin" && $senha == "admin") {
		$retornoLogin['aviso'] = "Autenticado";
	}else{
		$retornoLogin['aviso'] = "Não autenticado";
	}

	$retornoLogin_json = json_encode($retornoLogin);
	echo $retornoLogin_json;

?>