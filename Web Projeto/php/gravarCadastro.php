<?php
	
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirmarSenha = $_POST['senha'];

	$xml = new DOMDocument("1.0");

	$xml_dados = $xml->createElement("dadosUsuario");

	$xml_nome = $xml->createElement("nome", $nome);
	$xml_sobrenome = $xml->createElement("sobrenome", $sobrenome);
	$xml_usuario = $xml->createElement("usuario", $usuario);
	$xml_email = $xml->createElement("email", $email);
	$xml_senha = $xml->createElement("senha", $senha);
	$xml_confirmarSenha = $xml->createElement("confirmarSenha", $senha);

	$xml_dados->appendChild($xml_nome);
	$xml_dados->appendChild($xml_sobrenome);
	$xml_dados->appendChild($xml_usuario);
	$xml_dados->appendChild($xml_email);
	$xml_dados->appendChild($xml_senha);
	$xml_dados->appendChild($xml_confirmarSenha);

	$xml->appendChild($xml_dados);

	$xml->save("../xml/dadosUsuario.xml");

	echo json_encode("Cadastrado com sucesso!");

?>