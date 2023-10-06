<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit854aea185b3eae3fc6e80104196c1a24
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit854aea185b3eae3fc6e80104196c1a24', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit854aea185b3eae3fc6e80104196c1a24', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit854aea185b3eae3fc6e80104196c1a24::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}