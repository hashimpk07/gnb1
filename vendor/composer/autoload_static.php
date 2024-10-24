<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb605104994cb6cb77e8d896c86777779
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pc\\Gnb\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pc\\Gnb\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb605104994cb6cb77e8d896c86777779::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb605104994cb6cb77e8d896c86777779::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb605104994cb6cb77e8d896c86777779::$classMap;

        }, null, ClassLoader::class);
    }
}
