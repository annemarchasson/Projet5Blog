<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac34a02facc96a051d4696e179b8e4d7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\src\\' => 8,
            'App\\config\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac34a02facc96a051d4696e179b8e4d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac34a02facc96a051d4696e179b8e4d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
