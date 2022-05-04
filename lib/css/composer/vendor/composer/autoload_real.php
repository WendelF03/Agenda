<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit182f8c4f14e98faaa26bb1e17c6daa4d
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

        spl_autoload_register(array('ComposerAutoloaderInit182f8c4f14e98faaa26bb1e17c6daa4d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit182f8c4f14e98faaa26bb1e17c6daa4d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit182f8c4f14e98faaa26bb1e17c6daa4d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}