<?php

namespace Notification;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
*  Email: Notification
 */
class Email {

  //PRIVADAS
  private $mail =\stdClass::class;

  public function __construct() {
    $this->mail = new PHPMailer(true);
    //Server settings
     $this->mail->SMTPDebug = 2;                                 // Enable verbose debug output
     $this->mail->isSMTP();                                      // Set mailer to use SMTP
     $this->mail->Host = 'mail.buscafoz.com.br';  // Specify main and backup SMTP servers
     $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
     $this->mail->Username = 'suporte@buscafoz.com.br';                 // SMTP username
     $this->mail->Password = ';v47PXPECML(';                           // SMTP password
     $this->mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
     $this->mail->Port = 465;
     $this->mail->Charset = 'Utf-8';
     $this->mail->setLanguage('br');
     $this->mail->isHTML(true);
     //Recipients
     $this->mail->setFrom('suporte@buscafoz.com.br', 'Rikardo Andre Vieira');
  }

  public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;
        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);
        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}
