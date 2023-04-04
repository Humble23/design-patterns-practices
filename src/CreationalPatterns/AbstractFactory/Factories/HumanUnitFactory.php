<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Factories;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Factories\UnitFactoryInterface;
use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Human\HumanArcherUnit;
use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Human\HumanMageUnit;
use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Human\HumanWarriorUnit;

class HumanUnitFactory implements UnitFactoryInterface
{
    public function createWarrior(): HumanWarriorUnit
    {
        return new HumanWarriorUnit();
    }

    public function createMage(): HumanMageUnit
    {
        return new HumanMageUnit();
    }

    public function createArcher(): HumanArcherUnit
    {
        return new HumanArcherUnit();
    }
}