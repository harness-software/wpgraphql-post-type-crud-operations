<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d80b6ed1a141ec33bf2c007175b94b7
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HwpRockers\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HwpRockers\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d80b6ed1a141ec33bf2c007175b94b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d80b6ed1a141ec33bf2c007175b94b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8d80b6ed1a141ec33bf2c007175b94b7::$classMap;

        }, null, ClassLoader::class);
    }
}
