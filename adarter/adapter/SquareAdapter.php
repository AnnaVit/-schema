<?php


namespace adapter\adapter;

use adapter\inter\ISquare;
use adapter\library\SquareAreaLib;

class SquareAdapter implements ISquare
{
    private SquareAreaLib $squareArea;

    public function __construct(SquareAreaLib $squareArea)
    {
        $this->squareArea = $squareArea;
    }


    function squareArea(float $sideSquare)
    {
        $sideSquare = sqrt(2) * $sideSquare;
        return $this->squareArea->getSquareArea($sideSquare);
    }
}
