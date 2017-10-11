<?php
require __DIR__.'/lib_ext/autoload.php';

use Notification\Email;

$Subject = "Assunto de Teste";
$Body = "<p>Esse é um e-mail de <b>Teste</b></p>";
$Email = "andrerikardo3@gmail.com";
$EmailNome = "Rikardo Andre Vieira";
$EmailIr = 'suporte@buscafoz.com.br';
$EmailDes = 'Suporte';



$novoEmail = new Email;
$novoEmail->sendMail($Subject, $Body, $Email, $EmailNome, $EmailIr, $EmailDes);

var_dump($novoEmail);
