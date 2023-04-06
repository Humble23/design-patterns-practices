<?php

use Humble23\DesignPatterns\CreationalPatterns\Builder\FormBuilder;
use Humble23\DesignPatterns\CreationalPatterns\Builder\interfaces\FormBuilderInterface;

require_once __DIR__ . '/../../../vendor/autoload.php';

function registerFormClientCode(FormBuilderInterface $formBuilder): void
{
    echo $formBuilder->addTextField('name')
        ->addTextField('last_name')
        ->addEmailField('email')
        ->addTextField('age')
        ->addPasswordField('password')
        ->setSubmitButton('Register')
        ->buildForm();
}

function quizFormClientCode(FormBuilderInterface $formBuilder): void
{
    echo $formBuilder->addSelect('Favorite color', ['red', 'blue', 'green'])
        ->addCheckbox('Favorite animals', ['dog', 'cat', 'bird'])
        ->addCheckbox('Favorite fruits', ['apple', 'orange', 'banana'])
        ->addCheckbox('Favorite vegetables', ['carrot', 'potato', 'tomato'])
        ->addCheckbox('Favorite fruits', ['apple', 'orange', 'banana'])
        ->buildForm();
}

registerFormClientCode(new FormBuilder('/register'));
quizFormClientCode(new FormBuilder('/quiz'));