<?php

class SquareAreaAdapter implements ISquare
{
    private SquareAreaLib $square;

    public function __construct(SquareAreaLib $square)
    {
        $this->square = $square;
    }

    public function squareArea(float $sideSquare)
    {
        $diagonal = sqrt(($sideSquare ** 2) * 2);
        $area = $this->square->getSquareArea($diagonal);

        return round($area, 2);
    }
}
