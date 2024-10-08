<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit125dc02c9fe2d10cb1bbc3587dd6254e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MetaBox\\RestApi\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MetaBox\\RestApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit125dc02c9fe2d10cb1bbc3587dd6254e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit125dc02c9fe2d10cb1bbc3587dd6254e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit125dc02c9fe2d10cb1bbc3587dd6254e::$classMap;

        }, null, ClassLoader::class);
    }
}
