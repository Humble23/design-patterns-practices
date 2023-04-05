<?php

use Humble23\DesignPatterns\CreationalPatterns\Builder\FormBuilder;
use Humble23\DesignPatterns\CreationalPatterns\Builder\interfaces\FormBuilderInterface;

require_once __DIR__ . '/../../../vendor/autoload.php';

function clientCode(FormBuilderInterface $formBuilder): void
{
    echo $formBuilder->addTextField('name')
        ->addTextField('last_name')
        ->addEmailField('email')
        ->addTextField('age')
        ->addPasswordField('password')
        ->buildForm();
}

clientCode(new FormBuilder());