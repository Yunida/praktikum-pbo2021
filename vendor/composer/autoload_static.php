<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d7c882492624fbccd6d0058a2ae56ff
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
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d7c882492624fbccd6d0058a2ae56ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d7c882492624fbccd6d0058a2ae56ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d7c882492624fbccd6d0058a2ae56ff::$classMap;

        }, null, ClassLoader::class);
    }
}
