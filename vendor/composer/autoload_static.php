<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa5cc3d6ee6f09566c0c39971f8f5fc5
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa5cc3d6ee6f09566c0c39971f8f5fc5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa5cc3d6ee6f09566c0c39971f8f5fc5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa5cc3d6ee6f09566c0c39971f8f5fc5::$classMap;

        }, null, ClassLoader::class);
    }
}