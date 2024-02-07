<?php

class EmailNotificator {

    public function send($user, $text)
    {

    }
}

class SmsNotificator {

    public function send($user, $text)
    {

    }
}

///// Клиентский код
$smsNotificator = new SmsNotificator();
$emailNotificator = new EmailNotificator();

$sms_text = 'Текст для смс';
$email_text = 'Текст для email';

foreach ($users as $user){
    $smsNotificator->notify($user, $sms_text);
    $emailNotificator->notify($user, $email_text);
}

