<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1bd77a1b1e7691f9f4abf326420ba35a
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\UnfoldMaster\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\UnfoldMaster\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1bd77a1b1e7691f9f4abf326420ba35a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1bd77a1b1e7691f9f4abf326420ba35a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1bd77a1b1e7691f9f4abf326420ba35a::$classMap;

        }, null, ClassLoader::class);
    }
}
