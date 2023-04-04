<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Elf;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\WarriorInterface;

class ElfWarriorUnit implements WarriorInterface
{
    public function attack(): string
    {
        return 'Attacking with a ' . $this->getWeapon();
    }

    public function getRace(): string
    {
        return 'Elf';
    }

    public function getWeapon(): string
    {
        return 'Elf sword';
    }

    public function skill(): string
    {
        return 'Wind slash';
    }
}