<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97646f1e540aabdc123853e3ecc288f8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/Src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/app',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97646f1e540aabdc123853e3ecc288f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97646f1e540aabdc123853e3ecc288f8::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit97646f1e540aabdc123853e3ecc288f8::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit97646f1e540aabdc123853e3ecc288f8::$classMap;

        }, null, ClassLoader::class);
    }
}