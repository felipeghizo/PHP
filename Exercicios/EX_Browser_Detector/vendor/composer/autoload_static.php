<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9522d59a3d48a6030dd9e6069751e43e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sinergi\\BrowserDetector\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sinergi\\BrowserDetector\\' => 
        array (
            0 => __DIR__ . '/..' . '/sinergi/browser-detector/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9522d59a3d48a6030dd9e6069751e43e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9522d59a3d48a6030dd9e6069751e43e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9522d59a3d48a6030dd9e6069751e43e::$classMap;

        }, null, ClassLoader::class);
    }
}
