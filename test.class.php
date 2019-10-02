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

class NotificationService {

    public function notify(User $user, $text, $method) {

        $methodName = ucfirst($method).'Notificator';
        if(!class_exists($methodName)){
            throw new Exception("Метода отправки $method не существует");
        }
        $notificator = new $methodName();
        $notificator->send($user, $text);
    }
}


///// Клиентский код
$service = new NotificationService();
$sms_text = 'Текст для смс';
$email_text = 'Текст для email';

foreach ($users as $user){
    $service->notify($user, $sms_text, 'sms');
    $service->notify($user, $email_text, 'email');
}

