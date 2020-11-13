<?php

require 'IPayment.php';
require 'PaymentKivi.php';
require 'PaymentYandex.php';
require 'PaymentWebmoney.php';
require 'Shop.php';

$kivi = new PaymentKivi(2.35);
$yandex = new PaymentYandex(0.28);
$webmoney = new PaymentWebmoney(3.41);

$shop = new Shop();
$shop->createOrder(385.99, '+7 (999) 000-11-22');

$shop->payOrder($kivi);
$shop->payOrder($yandex);
$shop->payOrder($webmoney);
