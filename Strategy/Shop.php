<?php

class Shop
{
    private float $orderCost;
    private string $userPhone;

    public function createOrder(float $cost, string $phone): void
    {
        $this->orderCost = $cost;
        $this->userPhone = $phone;
    }

    public function payOrder(IPayment $payment): void
    {
        $payment->pay($this->orderCost, $this->userPhone);
    }
}
