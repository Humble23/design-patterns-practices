<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Elf;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\MageInterface;

class ElfMageUnit implements MageInterface
{
    public function attack(): string
    {
        return 'Attacking with ' . $this->magic();
    }

    public function getRace(): string
    {
        return 'Elf';
    }

    public function getWeapon(): string
    {
        return 'Nature ring';
    }

    public function magic(): string
    {
        return 'Nature rage';
    }
}