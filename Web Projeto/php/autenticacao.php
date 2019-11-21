<?php

	$getxml = file_get_contents("../xml/loginUser.xml");
	$login = new SimpleXmlElement($getxml);

	$usuario_1_mail = $login->user[0]->mailAddress;
	$usuario_1_pass = $login->user[0]->password;

	$usuario_2_mail = $login->user[1]->mailAddress;
	$usuario_2_pass = $login->user[1]->password;

	$usuario_3_mail = $login->user[2]->mailAddress;
	$usuario_3_pass = $login->user[2]->password;

	$usuario_4_mail = $login->user[3]->mailAddress;
	$usuario_4_pass = $login->user[3]->password;

	$emailS = array($usuario_1_mail, $usuario_2_mail, $usuario_3_mail, $usuario_4_mail);
	$senhaS = array($usuario_1_pass, $usuario_2_pass, $usuario_3_pass, $usuario_4_pass);

	$email = trim($_POST["email"]);
	$senha = trim($_POST["senha"]);

	if($email==$emailS[0] && $senha==$senhaS[0]){
		$retorno["status"] = "s";
		$retorno["aviso"] = "Usuário autenticado!";
		$retorno["carregar"] = "html/email.html";
	}elseif ($email==$emailS[1] && $senha==$senhaS[1]) {
		$retorno["status"] = "s";
		$retorno["aviso"] = "Usuário autenticado!";
		$retorno["carregar"] = "html/email.html";
	}elseif ($email==$emailS[2] && $senha==$senhaS[2]) {
		$retorno["status"] = "s";
		$retorno["aviso"] = "Usuário autenticado!";
		$retorno["carregar"] = "html/email.html";
	}elseif ($email==$emailS[3] && $senha==$senhaS[3]) {
		$retorno["status"] = "s";
		$retorno["aviso"] = "Usuário autenticado!";
		$retorno["carregar"] = "html/email.html";
	}else{
		$retorno["status"] = "n";
		$retorno["aviso"] = "E-Mail ou senha incorreto(s)!";
		$retorno["carregar"] = "Index.html";
	}

	$retorno_json = json_encode($retorno);
	echo $retorno_json;
?>