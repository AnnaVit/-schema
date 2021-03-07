<?php

namespace decorator;

abstract class DecoratorMessage implements ISendMessage
{
    protected  $mail;


    public function __construct(ISendMessage $mail)
    {
        $this->mail = $mail;
    }


}

