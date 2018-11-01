<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68faa8453c399b04fba565f711a130a8
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TreinaWeb\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\HttpKernel\\' => 29,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Debug\\' => 24,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TreinaWeb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/TreinaWeb',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\HttpKernel\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-kernel',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $classMap = array (
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Resources/stubs/SessionHandlerInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68faa8453c399b04fba565f711a130a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68faa8453c399b04fba565f711a130a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68faa8453c399b04fba565f711a130a8::$classMap;

        }, null, ClassLoader::class);
    }
}
