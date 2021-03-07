<?php

namespace decorator\mailer;

use decorator\DecoratorMessage;

class Facebook extends DecoratorMessage
{

    public function sendMessage(): void
    {
        echo "Отправка сообщения в Facebook" . PHP_EOL;
        $this->mail->sendMessage();
    }

}