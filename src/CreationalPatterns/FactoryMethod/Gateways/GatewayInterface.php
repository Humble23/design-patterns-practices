<?php

namespace Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Gateways;

abstract class GatewayInterface
{
    abstract public function pay(int $amount): array;

    abstract public function refund(int $transactionId): array;
}