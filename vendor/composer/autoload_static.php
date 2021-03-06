<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit847a7ec3f6d556796aaee01c720a9ed3
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '524c7fdb7068c808ae269c1fbf00fa21' => __DIR__ . '/..' . '/wenprise/debug/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wenprise\\ImageOptimizer\\' => 24,
            'Wenprise\\' => 9,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\Process\\' => 26,
            'Spatie\\ImageOptimizer\\' => 22,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wenprise\\ImageOptimizer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Wenprise\\' => 
        array (
            0 => __DIR__ . '/..' . '/wenprise/debug/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Spatie\\ImageOptimizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/image-optimizer/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit847a7ec3f6d556796aaee01c720a9ed3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit847a7ec3f6d556796aaee01c720a9ed3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
