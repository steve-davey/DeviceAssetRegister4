<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit741a4c388dbfa0e00dda7539ba50944d
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
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit741a4c388dbfa0e00dda7539ba50944d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit741a4c388dbfa0e00dda7539ba50944d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit741a4c388dbfa0e00dda7539ba50944d::$classMap;

        }, null, ClassLoader::class);
    }
}