<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8d0e3489c6ac81dc76c89dde4666c7a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuannda\\NewMvc\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuannda\\NewMvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf8d0e3489c6ac81dc76c89dde4666c7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf8d0e3489c6ac81dc76c89dde4666c7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf8d0e3489c6ac81dc76c89dde4666c7a::$classMap;

        }, null, ClassLoader::class);
    }
}
