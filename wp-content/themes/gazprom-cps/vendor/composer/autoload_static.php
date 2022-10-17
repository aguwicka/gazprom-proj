<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe49dc6ceec58521f44063fbec6c1ef4
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tomverran\\Robot\\' => 16,
        ),
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tomverran\\Robot\\' => 
        array (
            0 => __DIR__ . '/..' . '/tomverran/robots-txt-checker/src/Robot',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe49dc6ceec58521f44063fbec6c1ef4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe49dc6ceec58521f44063fbec6c1ef4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe49dc6ceec58521f44063fbec6c1ef4::$classMap;

        }, null, ClassLoader::class);
    }
}
