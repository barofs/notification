<?php
require __DIR__.'/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2,'mail.buscafoz.com.br','suporte@buscafoz.com.br', ';v47PXPECML(', 'tls', 587, 'suporte@buscafoz.com.br', 'Rikardo Andre Vieira');
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>Teste</b></p>", "andrerikardo3@gmail.com",
"Rikardo Andre Vieira", 'suporte@buscafoz.com.br', 'Suporte');

var_dump($novoEmail);
