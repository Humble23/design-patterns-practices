<?php

namespace Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Payments;

use Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Gateways\GatewayInterface;

abstract class CheckoutInterface
{
    abstract public function getPaymentGateway(): GatewayInterface;

    public function pay(int $amount): array
    {
        $paymentGateway = $this->getPaymentGateway();

        return $paymentGateway->pay($amount);
    }

    public function refund(int $transactionId): array
    {
        $paymentGateway = $this->getPaymentGateway();

        return $paymentGateway->refund($transactionId);
    }
}