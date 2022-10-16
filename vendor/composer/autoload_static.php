<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe3febd0604170dde1689a507d1d9e72
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'muyomu\\router\\' => 14,
            'muyomu\\http\\' => 12,
            'muyomu\\framework\\' => 17,
            'muyomu\\executor\\' => 16,
            'muyomu\\dpara\\' => 13,
            'muyomu\\database\\' => 16,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'muyomu\\router\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/router/src',
        ),
        'muyomu\\http\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/http/src',
        ),
        'muyomu\\framework\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/framework/src',
        ),
        'muyomu\\executor\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/executor/src',
        ),
        'muyomu\\dpara\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/dpara/src',
        ),
        'muyomu\\database\\' => 
        array (
            0 => __DIR__ . '/..' . '/muyomu/database/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe3febd0604170dde1689a507d1d9e72::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe3febd0604170dde1689a507d1d9e72::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe3febd0604170dde1689a507d1d9e72::$classMap;

        }, null, ClassLoader::class);
    }
}
