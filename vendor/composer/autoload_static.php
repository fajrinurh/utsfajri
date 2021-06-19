<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a4ed7a4284b196ee1e52fe9335b2463
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a4ed7a4284b196ee1e52fe9335b2463::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a4ed7a4284b196ee1e52fe9335b2463::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a4ed7a4284b196ee1e52fe9335b2463::$classMap;

        }, null, ClassLoader::class);
    }
}
