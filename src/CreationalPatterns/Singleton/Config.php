<?php

namespace Humble23\DesignPatterns\CreationalPatterns\Singleton;

class Config extends Singleton
{
    private array $attributes = [
        'APP_NAME' => 'Humble23',
    ];

    public function getValue(string $key): string
    {
        return $this->attributes[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->attributes[$key] = $value;
    }
}