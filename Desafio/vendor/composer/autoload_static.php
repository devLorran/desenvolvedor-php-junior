<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac59fc6824ec4e372e3de8d316fa7ce9
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac59fc6824ec4e372e3de8d316fa7ce9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac59fc6824ec4e372e3de8d316fa7ce9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
