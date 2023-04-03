<?php

namespace Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Gateways;

class Stripe extends GatewayInterface
{
    public function __construct(
        private string $apiKey
    ) {}
    
    public function pay(int $amount): array
    {
        echo "Send HTTP request to stripe payment endpoint passing amount $amount"  . PHP_EOL;
        
        return [
            'status' => 'success',
        ];
    }

    public function refund(int $transactionId): array
    {
        echo "Send HTTP request to stripe refund endpoint passing transaction id $transactionId"  . PHP_EOL;

        return [
            'status' => 'success',
        ];
    }
}