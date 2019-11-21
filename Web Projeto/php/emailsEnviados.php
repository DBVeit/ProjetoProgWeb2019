<?php

$xml_string = file_get_contents("../xml/enviados.xml");

$xml_objeto = simplexml_load_string($xml_string);

$retorno["remetente"] = trim($xml_objeto->remetente);
$retorno["copia"] = trim($xml_objeto->copia);
$retorno["destinatario"] = trim($xml_objeto->destinatario);
$retorno["assunto"] = trim($xml_objeto->assunto);
$retorno["texto"] = trim($xml_objeto->texto);

echo json_encode($retorno);

?>