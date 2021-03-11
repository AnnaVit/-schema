<?php


namespace strategy\entity;


interface IPayment
{
    public function pay(Order $order);
}