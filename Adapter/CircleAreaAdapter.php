<?php

class CircleAreaAdapter implements ICircle
{
    private CircleAreaLib $circle;

    public function __construct(CircleAreaLib $circle)
    {
        $this->circle = $circle;
    }

    public function circleArea(float $circumference)
    {
        $diagonal = $circumference / M_PI;
        $area = $this->circle->getCircleArea($diagonal);

        return round($area, 2);
    }
}
