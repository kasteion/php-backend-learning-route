<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad6dc3fc64b3958680cfe7a7d2d1b9c7
{
    public static $files = array (
        '1b2c369a7b1e05bdacb4dfb5d00186ba' => __DIR__ . '/../..' . '/app/helpers.php',
    );

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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad6dc3fc64b3958680cfe7a7d2d1b9c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad6dc3fc64b3958680cfe7a7d2d1b9c7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
