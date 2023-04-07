<?php

namespace Humble23\DesignPatterns\CreationalPatterns\Prototype\Interfaces;

use Humble23\DesignPatterns\CreationalPatterns\Prototype\Project;

interface TaskInterface
{
    public function getName(): string;

    public function getDescription(): string;

    public function getDeadline(): ?string;

    public function getStatus(): string;

    public function getPriority(): string;

    public function getUserId(): int;

    public function getProject(): Project;
}