<?php

namespace decorator;

class Messages implements ISendMessage //поведение по умолчанию
{

    protected  $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function sendMessage(): void
    {
        echo "Отправка сообщения {$this->text} по email" . PHP_EOL;
    }

    public function getMessage(): string
    {
        return $this->text;
    }
}