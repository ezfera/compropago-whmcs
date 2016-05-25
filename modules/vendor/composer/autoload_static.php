<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0d298eedddd71a352d2a0e070760d21
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CompropagoViews\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CompropagoViews\\' => 
        array (
            0 => __DIR__ . '/..' . '/compropago/views-sdk/Views',
        ),
    );

    public static $classMap = array (
        'CompropagoViews\\ChargeView' => __DIR__ . '/..' . '/compropago/views-sdk/Views/ChargeViews.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0d298eedddd71a352d2a0e070760d21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0d298eedddd71a352d2a0e070760d21::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd0d298eedddd71a352d2a0e070760d21::$classMap;

        }, null, ClassLoader::class);
    }
}