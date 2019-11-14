<?php

$getxml = file_get_contents("../xml/listEmail.xml");
$listing = new SimpleXmlElement($getxml);

$email_content_1 = $listing->content->email[0]->remetente;
$email_content_2 = $listing->content->email[0]->assunto;
$email_content_3 = $listing->content->email[0]->mensagem;

echo $email_content_1." - ".$email_content_2." - ".$email_content_3;

$remetente = $_POST["remetente"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

$retorno[0]["remetente"] = $email_content_1;
$retorno[0]["assunto"] = $email_content_2;
$retorno[0]["mensagem"] = $email_content_3;

echo json_encode($retorno);

?>