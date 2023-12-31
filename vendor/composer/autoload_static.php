<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit854aea185b3eae3fc6e80104196c1a24
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'O' => 
        array (
            'OTPHP\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'OTPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/spomky-labs/otphp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit854aea185b3eae3fc6e80104196c1a24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit854aea185b3eae3fc6e80104196c1a24::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit854aea185b3eae3fc6e80104196c1a24::$classMap;

        }, null, ClassLoader::class);
    }
}
