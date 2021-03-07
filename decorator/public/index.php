<?php

include "..\service\Autoloader.php";


use decorator\mailer\Facebook;
use decorator\mailer\Sms;
use decorator\mailer\Telegram;


spl_autoload_register([new decorator\service\Autoloader(), 'loadClass']);

$test = new Telegram
    (new Sms
    (new Facebook
    (new \decorator\Messages("Добрый вечер")
    )));


$test->sendMessage();
