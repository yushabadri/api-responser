<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc01dd9d5eabc7791b8d2bb97055f35fb
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

        spl_autoload_register(array('ComposerAutoloaderInitc01dd9d5eabc7791b8d2bb97055f35fb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc01dd9d5eabc7791b8d2bb97055f35fb', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc01dd9d5eabc7791b8d2bb97055f35fb::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
