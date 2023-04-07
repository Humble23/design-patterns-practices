<?php

namespace Humble23\DesignPatterns\CreationalPatterns\Prototype;

class Project
{
    public function __construct(
        private string $name,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function __clone()
    {
        $this->name = $this->name;
    }
}