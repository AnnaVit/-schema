<?php


namespace strategy\entity;


class PaymentType
{

    private $payment;

    public function __construct(IPayment $payment)
    {
        $this->payment = $payment;
    }


    public function setPayment(IPayment $newPayment)
    {
        //echo "Тип оплаты {$newPayment}";
        $this->payment = $newPayment;
    }

    public function makePayment(Order $order)
    {
        $this->payment->pay($order);
    }

}