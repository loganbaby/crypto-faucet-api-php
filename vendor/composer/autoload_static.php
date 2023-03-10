<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0eb2596392440774a14963bc28f88246
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mahtab2003\\FaucetPay\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mahtab2003\\FaucetPay\\' => 
        array (
            0 => __DIR__ . '/..' . '/mahtab2003/faucetpay/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0eb2596392440774a14963bc28f88246::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0eb2596392440774a14963bc28f88246::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0eb2596392440774a14963bc28f88246::$classMap;

        }, null, ClassLoader::class);
    }
}
