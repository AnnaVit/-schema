<?php


namespace adapter\adapter;


use adapter\inter\ICircle;
use adapter\library\CircleAreaLib;

class CircleAdapter implements ICircle
{
    private CircleAreaLib $circleArea;

    public function __construct(CircleAreaLib $circleArea)
    {
        $this->circleArea = $circleArea;
    }

    function circleArea(float $circumference)
    {
        $diagonal = 2 * ($circumference/M_PI);
        return $this->circleArea->getCircleArea($diagonal);

    }

}
