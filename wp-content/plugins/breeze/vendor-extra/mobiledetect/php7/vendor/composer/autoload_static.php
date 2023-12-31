<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit756bd8083f0ed18e146e9d4f2bae30af
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Detection\\' => 10,
            'DetectionTests\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Detection\\' => 
        array (
            0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/src',
        ),
        'DetectionTests\\' => 
        array (
            0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/tests',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Detection\\MobileDetect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/src/MobileDetect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit756bd8083f0ed18e146e9d4f2bae30af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit756bd8083f0ed18e146e9d4f2bae30af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit756bd8083f0ed18e146e9d4f2bae30af::$classMap;

        }, null, ClassLoader::class);
    }
}
