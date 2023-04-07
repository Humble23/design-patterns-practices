<?php

use Humble23\DesignPatterns\CreationalPatterns\Prototype\Interfaces\TaskInterface;
use Humble23\DesignPatterns\CreationalPatterns\Prototype\Project;
use Humble23\DesignPatterns\CreationalPatterns\Prototype\Task;

require_once __DIR__ . '/../../../vendor/autoload.php';

function clientCode(TaskInterface $clonableTask): void
{
    echo "Original task: " . $clonableTask->getName() . PHP_EOL;
    var_dump($clonableTask);
    $taskClone = clone $clonableTask;
    echo "Task clone: " . $taskClone->getName() . PHP_EOL;
    var_dump($taskClone);
}

clientCode(new Task('Task 1', 'Descrição', 1, 1, new Project('Project 1')));