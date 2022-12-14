<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd1199df1ac183b04a2c3fecf0cf9cbf1
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

        spl_autoload_register(array('ComposerAutoloaderInitd1199df1ac183b04a2c3fecf0cf9cbf1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd1199df1ac183b04a2c3fecf0cf9cbf1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd1199df1ac183b04a2c3fecf0cf9cbf1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
