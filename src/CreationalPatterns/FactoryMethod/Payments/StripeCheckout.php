<?php

namespace Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Payments;

use Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Gateways\Stripe;
use Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Payments\CheckoutInterface;

class StripeCheckout extends CheckoutInterface
{
    public function getPaymentGateway(): Stripe
    {
        return new Stripe('api_key');
    }
}