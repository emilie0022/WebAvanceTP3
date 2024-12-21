<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4400e91bb6bfb514238001fc583f3fa9
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4400e91bb6bfb514238001fc583f3fa9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4400e91bb6bfb514238001fc583f3fa9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4400e91bb6bfb514238001fc583f3fa9::$classMap;

        }, null, ClassLoader::class);
    }
}
