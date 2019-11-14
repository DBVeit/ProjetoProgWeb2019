<?php
	$email = trim($_POST["email"]);
	$senha = trim($_POST["senha"]);

	if($email=="admin" && $senha=="admin"){
		$retorno["status"] = "s";
		$retorno["mensagem"] = "usuario autenticado";
	}
	else{
		$retorno["status"] = "n";
		$retorno["mensagem"] = "E-Mail ou senha incorreto(s)!";
	}

	$retorno_json = json_encode($retorno);
	echo $retorno_json;
?>