<?php

interface IPayment
{
    public function pay(float $cost, string $phone): void;
}
