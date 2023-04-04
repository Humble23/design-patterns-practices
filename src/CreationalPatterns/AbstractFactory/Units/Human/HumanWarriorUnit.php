<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Human;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\WarriorInterface;

class HumanWarriorUnit implements WarriorInterface
{
    public function attack(): string
    {
        return 'Attacking with a ' . $this->getWeapon();
    }

    public function getRace(): string
    {
        return 'Human';
    }

    public function getWeapon(): string
    {
        return 'Long Sword';
    }

    public function skill(): string
    {
        return 'Spin attack';
    }
}