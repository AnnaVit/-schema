<?php


namespace adapter\library;


class SquareAreaLib
{
    public function getSquareArea(float $diagonal)
    {
        $area = ($diagonal**2)/2;

        return $area;
    }
}