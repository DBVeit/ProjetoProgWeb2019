<?php

$xml_string = file_get_contents("../listEmail.xml");

$xml_objeto = simplexml_load_string($xml_string);

$retorno["remetente"] = trim($xml_objeto->content->email->remetente);
$retorno["copia"] = trim($xml_objeto->content->email->copia);
$retorno["destinatario"] = trim($xml_objeto->content->email->destinatario);
$retorno["assunto"] = trim($xml_objeto->content->email->assunto);
$retorno["texto"] = trim($xml_objeto->content->email->texto);

echo json_encode($retorno);

?>