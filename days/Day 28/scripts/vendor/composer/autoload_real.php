<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit299b1675c8d3db6d6b66602c5f5ea84b
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

        spl_autoload_register(array('ComposerAutoloaderInit299b1675c8d3db6d6b66602c5f5ea84b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit299b1675c8d3db6d6b66602c5f5ea84b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit299b1675c8d3db6d6b66602c5f5ea84b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
