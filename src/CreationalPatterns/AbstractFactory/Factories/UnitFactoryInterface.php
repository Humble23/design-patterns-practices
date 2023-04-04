<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Factories;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\ArcherInterface;
use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\MageInterface;
use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\WarriorInterface;

interface UnitFactoryInterface
{
    public function createWarrior(): WarriorInterface;

    public function createMage(): MageInterface;

    public function createArcher(): ArcherInterface;
}