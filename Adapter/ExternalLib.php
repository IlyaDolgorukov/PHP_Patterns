<?php

class CircleAreaLib
{
    public function getCircleArea(float $diagonal)
    {
        return (M_PI * $diagonal ** 2) / 4;
    }
}

class SquareAreaLib
{
    public function getSquareArea(float $diagonal)
    {
        return ($diagonal ** 2) / 2;
    }
}
