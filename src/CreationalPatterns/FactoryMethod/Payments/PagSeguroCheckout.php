<?php

namespace Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Payments;

use Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Gateways\PagSeguro;
use Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Payments\CheckoutInterface;

class PagSeguroCheckout extends CheckoutInterface
{
    public function getPaymentGateway(): PagSeguro
    {
        return new PagSeguro('api_key');
    }
}