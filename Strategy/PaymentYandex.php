<?php

class PaymentYandex implements IPayment
{
    private float $percent;

    public function __construct(float $percent)
    {
        $this->percent = $percent;
    }

    public function pay(float $cost, string $phone): void
    {
        $commission = $cost / 100 * $this->percent;
        $amount = $cost + $commission;
        echo 'Payment by Yandex. Details of operation:' . PHP_EOL;
        echo 'Order cost: $' . $cost . PHP_EOL;
        echo 'Operator commission (' . $this->percent . '%): $' . round($commission, 2) . PHP_EOL;
        echo 'Payment amount: $' . round($amount, 2) . PHP_EOL;
        echo 'User phone number: ' . $phone . PHP_EOL . PHP_EOL;
    }
}
