<?php

namespace Humble23\DesignPatterns\CreationalPatterns\AbstractFactory\Units\Interfaces;

interface UnitInterface
{
    public function attack(): string;

    public function getRace(): string;

    public function getWeapon(): string;
}