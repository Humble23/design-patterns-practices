<?php

use Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Payments\CheckoutInterface;
use Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Payments\PagSeguroCheckout;
use Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Payments\StripeCheckout;

require_once __DIR__ . '/../../../vendor/autoload.php';

function clientCode(CheckoutInterface $checkout): string
{
    return json_encode($checkout->pay(100));
}

echo clientCode(new PagSeguroCheckout()) . PHP_EOL;
echo clientCode(new StripeCheckout()) . PHP_EOL;