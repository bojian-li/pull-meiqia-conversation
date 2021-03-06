<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit017894921b8c1d8060cf761e708c26b9
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Guanguans\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Guanguans\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit017894921b8c1d8060cf761e708c26b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit017894921b8c1d8060cf761e708c26b9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
