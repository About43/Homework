<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('About43@mail.ru')
    ->setPassword('wUgNgG63XDndxE5efUWx')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['About43@mail.ru' => 'Ivan'])
    ->setTo(['macya2000@mail.ru'])
    ->setBody('Сообщение от mailer')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);