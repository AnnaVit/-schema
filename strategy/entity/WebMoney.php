<?php


namespace strategy\entity;


class WebMoney implements IPayment
{

    public function pay(Order $order)
    {
        echo "Заказ {$order->orderNum} на сумму {$order->orderSum} оплачен WebMoney";
    }
}