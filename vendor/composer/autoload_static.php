<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63b0218801a157f97b66a960807e364f
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dynamische\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dynamische\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63b0218801a157f97b66a960807e364f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63b0218801a157f97b66a960807e364f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}