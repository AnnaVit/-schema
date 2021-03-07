<?php


namespace adapter\inter;


interface ICircle
{
    function circleArea(float $circumference);
}

//возвращает длину окружности
//нужена диагональ окружности, это 2 диаметра
//с = пи х d
//D(диаметр) = 2(C(длина окружности)/pi)