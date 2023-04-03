<?php

namespace Humble23\DesignPatterns\CreationalPatterns\FactoryMethod\Gateways;

class PagSeguro extends GatewayInterface
{
    public function __construct(
        private string $apiKey
    ) {}
    
    public function pay(int $amount): array
    {
        echo "Send HTTP request to pagseguro payment endpoint passing amount $amount" . PHP_EOL;
        
        return [
            'status' => 'success',
        ];
    }

    public function refund(int $transactionId): array
    {
        echo "Send HTTP request to pagseguro refund endpoint passing transaction id $transactionId" . PHP_EOL;

        return [
            'status' => 'success',
        ];
    }
}