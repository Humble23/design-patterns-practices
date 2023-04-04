<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Human;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\ArcherInterface;

class HumanArcherUnit implements ArcherInterface
{
    public function attack(): string
    {
        return 'Shooting with a ' . $this->getWeapon();
    }

    public function getRace(): string
    {
        return 'Human';
    }

    public function getWeapon(): string
    {
        return 'Long bow';
    }

    public function skill(): string
    {
        return 'Hyper shot';
    }
}