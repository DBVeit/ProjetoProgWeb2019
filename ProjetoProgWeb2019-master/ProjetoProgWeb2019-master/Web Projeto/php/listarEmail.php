<?php

$xml_string = file_get_contents("listEmail.xml");

$xml_objeto = simplexml_load_string($xml_string);

$retorno["remetente"] = trim($xml_objeto->content->email->remetente);
$retorno["assunto"] = trim($xml_objeto->content->email->assunto);
$retorno["mensagem"] = trim($xml_objeto->content->email->mensagem);

echo json_encode($retorno);

?>