<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita883c370b73c8ea7b397003c115f6712
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita883c370b73c8ea7b397003c115f6712::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita883c370b73c8ea7b397003c115f6712::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}