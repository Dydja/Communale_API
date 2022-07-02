<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit83cdadb2f4a68cd3ba5c24e87ff084ca
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

        spl_autoload_register(array('ComposerAutoloaderInit83cdadb2f4a68cd3ba5c24e87ff084ca', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit83cdadb2f4a68cd3ba5c24e87ff084ca', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit83cdadb2f4a68cd3ba5c24e87ff084ca::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit83cdadb2f4a68cd3ba5c24e87ff084ca::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire83cdadb2f4a68cd3ba5c24e87ff084ca($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire83cdadb2f4a68cd3ba5c24e87ff084ca($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}