<?php

	$para = $_POST['para'];
	$copia = $_POST['copia'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

	$xml = new DOMDocument("1.0");

	$xml_rascunho = $xml->createElement("rascunho");

	$xml_para = $xml->createElement("para", $para);
	$xml_copia = $xml->createElement("copia", $copia);
	$xml_assunto = $xml->createElement("assunto", $assunto);
	$xml_mensagem = $xml->createElement("mensagem", $mensagem);

	$xml_rascunho->appendChild($xml_para);
	$xml_rascunho->appendChild($xml_copia);
	$xml_rascunho->appendChild($xml_assunto);
	$xml_rascunho->appendChild($xml_mensagem);

	$xml->appendChild($xml_rascunho);

	$xml->save("../xml/rascunho.xml");

	echo json_encode("Mensagem enviada!");

?>