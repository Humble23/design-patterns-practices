<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Human;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\MageInterface;

class HumanMageUnit implements MageInterface
{
    public function attack(): string
    {
        return 'Attacking with ' . $this->magic();
    }

    public function getRace(): string
    {
        return 'Human';
    }

    public function getWeapon(): string
    {
        return 'Fire rod';
    }

    public function magic(): string
    {
        return 'Fire ball';
    }
}