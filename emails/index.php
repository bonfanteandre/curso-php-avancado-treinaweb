<?php

require __DIR__ . '/vendor/autoload.php';

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl');
$transport->setUsername('andre.bonfante.teste@gmail.com');
$transport->setPassword('');

$mails = Swift_Mailer::newInstance($transport);

$body = <<<HTML
    <h1>E-mail</h1>
    <p>Esta é uma mensagem enviada via PHP com Swift Mailer</p>
HTML;

$message = Swift_Message::newInstance('Assunto do e-mail');
$message->setFrom(['andre.bonfante.teste@gmail.com' => 'André Bonfante']);
$message->setTo('andre.bonfante.teste@gmail.com');
$message->setBody($body, 'text/html');

$res = $mail->send($message);

if ($res) {
    echo 'E-mail enviado com sucesso!';
} else {
    echo 'Erro ao enviar e-mail';
}