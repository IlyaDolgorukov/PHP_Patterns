<?php

require 'ExternalLib.php';
require 'ICircle.php';
require 'ISquare.php';
require 'CircleAreaAdapter.php';
require 'SquareAreaAdapter.php';

$circle = new CircleAreaAdapter(new CircleAreaLib());
$circumference = 34;
echo 'Circle area = ' . $circle->circleArea($circumference) . PHP_EOL;

$square = new SquareAreaAdapter(new SquareAreaLib());
$sideSquare = 10;
echo 'Square area = ' . $square->squareArea($sideSquare) . PHP_EOL;
