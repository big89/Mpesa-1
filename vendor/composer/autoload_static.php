<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ff4a0c76c5b010b41350390500cf359
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpesa\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpesa\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ff4a0c76c5b010b41350390500cf359::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ff4a0c76c5b010b41350390500cf359::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}