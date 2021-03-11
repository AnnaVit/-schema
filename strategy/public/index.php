<?php

include "..\service\Autoloader.php";

use strategy\entity\PaymentType;
use strategy\entity\WebMoney;
use strategy\entity\Yandex;
use strategy\entity\Order;

spl_autoload_register([new strategy\service\Autoloader(), 'loadClass']);

/*2. Стратегия: есть интернет-магазин по продаже носков.
Необходимо реализовать возможность оплаты различными способами (Qiwi, Яндекс, WebMoney).
Разница лишь в обработке запроса на оплату и получение ответа от платёжной системы.
В интерфейсе функции оплаты достаточно общей суммы товара и номера телефона.*/

$order = new Order(1111, 1122);
$payment = new PaymentType(
    new WebMoney());

$payment->makePayment($order);

$payment->setPayment(new Yandex());

$payment->makePayment($order);