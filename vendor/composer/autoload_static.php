<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf53919f52f92a167553b9bcbc959312
{
    public static $files = array (
        'f8d8a849fd0998112eb1da85e5563436' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Humble23\\DesignPatterns\\Tests\\' => 30,
            'Humble23\\DesignPatterns\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Humble23\\DesignPatterns\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Humble23\\DesignPatterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf53919f52f92a167553b9bcbc959312::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf53919f52f92a167553b9bcbc959312::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf53919f52f92a167553b9bcbc959312::$classMap;

        }, null, ClassLoader::class);
    }
}
