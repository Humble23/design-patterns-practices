<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\UnitInterface;

interface ArcherInterface extends UnitInterface
{
    public function skill(): string;
}