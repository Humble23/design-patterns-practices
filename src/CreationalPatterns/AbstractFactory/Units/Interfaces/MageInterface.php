<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces;

use Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces\UnitInterface;

interface MageInterface extends UnitInterface
{
    public function magic(): string;
}