<?php


namespace strategy\entity;


class Order
{
    public $orderNum;
    public $orderSum;

    public function __construct($orderNum, $orderSum)
    {
        $this->orderNum = $orderNum;
        $this->orderSum = $orderSum;
    }

}