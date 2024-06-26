<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63b16b9eeb3c0254519d22bcb830f4cb
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Woothee\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Woothee\\' => 
        array (
            0 => __DIR__ . '/..' . '/woothee/woothee/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63b16b9eeb3c0254519d22bcb830f4cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63b16b9eeb3c0254519d22bcb830f4cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit63b16b9eeb3c0254519d22bcb830f4cb::$classMap;

        }, null, ClassLoader::class);
    }
}
