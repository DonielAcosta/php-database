<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2184a51276d951f8afa23bf88a9b7c3
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Router\\' => 7,
        ),
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/router',
        ),
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2184a51276d951f8afa23bf88a9b7c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2184a51276d951f8afa23bf88a9b7c3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2184a51276d951f8afa23bf88a9b7c3::$classMap;

        }, null, ClassLoader::class);
    }
}
