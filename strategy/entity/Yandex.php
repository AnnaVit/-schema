<?php


namespace strategy\entity;


class Yandex implements IPayment
{

    public function pay(Order $order)
    {
        echo "Заказ {$order->orderNum} на сумму {$order->orderSum} оплачен Yandex";
    }
}