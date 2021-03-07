<?php

namespace decorator\mailer;

use decorator\DecoratorMessage;


class Telegram extends DecoratorMessage
{
    public function sendMessage(): void
    {
        echo "Отправка сообщения  в Telegram" . PHP_EOL;
        $this->mail->sendMessage();
    }
}