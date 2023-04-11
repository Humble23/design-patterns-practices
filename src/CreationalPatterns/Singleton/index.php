<?php

use Humble23\DesignPatterns\CreationalPatterns\Singleton\Config;

require_once __DIR__ . '/../../../vendor/autoload.php';

$config1 = Config::getInstance();

echo "APP_NAME: " . $config1->getValue("APP_NAME") . PHP_EOL;

$login = "test_login";
$password = "test_password";
$config1->setValue("login", $login);
$config1->setValue("password", $password);
$config2 = Config::getInstance();
if ($login == $config2->getValue("login") &&
    $password == $config2->getValue("password")
) {
    echo "Singleton funcionando corretamente" . PHP_EOL;
}