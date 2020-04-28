<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f11c6705bc8422ac187755cb003d0f0
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'app\\Active_sessions' => __DIR__ . '/../..' . '/app/Active_sessions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f11c6705bc8422ac187755cb003d0f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f11c6705bc8422ac187755cb003d0f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f11c6705bc8422ac187755cb003d0f0::$classMap;

        }, null, ClassLoader::class);
    }
}
