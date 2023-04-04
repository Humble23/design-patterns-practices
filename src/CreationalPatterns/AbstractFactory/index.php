<?php

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Factories\ElfUnitFactory;
use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Factories\HumanUnitFactory;
use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Factories\UnitFactoryInterface;

require_once __DIR__ . '/../../../vendor/autoload.php';

function clientCode(UnitFactoryInterface $unitFactory): void
{
    $warrior = $unitFactory->createWarrior();
    echo $warrior->getRace() . ' warrior ' . $warrior->attack() . PHP_EOL;
    $mage = $unitFactory->createMage();
    echo $mage->getRace() . ' mage ' . $mage->attack() . PHP_EOL;
    $archer = $unitFactory->createArcher();
    echo $archer->getRace() . ' archer ' . $archer->attack() . PHP_EOL;
}

clientCode(new HumanUnitFactory());
clientCode(new ElfUnitFactory());