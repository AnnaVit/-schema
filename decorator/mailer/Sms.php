<?php

namespace decorator\mailer;

use decorator\DecoratorMessage;

class Sms extends DecoratorMessage
{
    public function sendMessage(): void
    {
        echo "Отправка сообщения  в по sms" . PHP_EOL;
        $this->mail->sendMessage();
    }

}