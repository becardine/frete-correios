<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbd20dec00f08be16bb3fa245a18c48f
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbbd20dec00f08be16bb3fa245a18c48f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbbd20dec00f08be16bb3fa245a18c48f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbbd20dec00f08be16bb3fa245a18c48f::$classMap;

        }, null, ClassLoader::class);
    }
}
