<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Factories;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Factories\UnitFactoryInterface;
use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Elf\ElfArcherUnit;
use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Elf\ElfMageUnit;
use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Elf\ElfWarriorUnit;

class ElfUnitFactory implements UnitFactoryInterface
{
    public function createWarrior(): ElfWarriorUnit
    {
        return new ElfWarriorUnit();
    }

    public function createMage(): ElfMageUnit
    {
        return new ElfMageUnit();
    }

    public function createArcher(): ElfArcherUnit
    {
        return new ElfArcherUnit();
    }
}