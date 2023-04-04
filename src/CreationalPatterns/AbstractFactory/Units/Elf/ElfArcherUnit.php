<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Elf;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\ArcherInterface;

class ElfArcherUnit implements ArcherInterface
{
    public function attack(): string
    {
        return 'Shooting with a ' . $this->getWeapon();
    }

    public function getRace(): string
    {
        return 'Elf';
    }

    public function getWeapon(): string
    {
        return 'Magic bow';
    }

    public function skill(): string
    {
        return 'Magic shot';
    }
}