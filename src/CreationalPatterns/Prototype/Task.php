<?php

namespace Humble23\DesignPatterns\CreationalPatterns\Prototype;

use Humble23\DesignPatterns\CreationalPatterns\Prototype\Interfaces\TaskInterface;

class Task implements TaskInterface
{
    public function __construct(
        private string $name,
        private string $description,
        private int $priority,
        private int $userId,
        private Project $project,
        private ?string $deadline = null,
        private string $status = 'backlog'
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDeadline(): string
    {
        return $this->deadline;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getPriority(): string
    {
        return $this->priority;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getProject(): Project
    {
        return $this->project;
    }

    public function __clone()
    {
        $this->name = 'Copy of ' . $this->name;
        $this->description = $this->description;
        $this->priority = $this->priority;
        $this->userId = $this->userId;
        $this->project = clone $this->project;
        $this->deadline = $this->deadline;
        $this->status = $this->status;
    }
}

