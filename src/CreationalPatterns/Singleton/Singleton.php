<?php

namespace Humble23\DesignPatterns\CreationalPatterns\Singleton;

class Singleton
{
    private static array $instances = [];

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup(): void
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance()
    {
        $subclass = static::class;

        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }

        return self::$instances[$subclass];
    }
}