<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5827e3cf0e83eb74cd5dac668cfeea52
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Neptunia\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Neptunia\\' => 
        array (
            0 => __DIR__ . '/../..' . '/neptunia',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Neptunia\\Application' => __DIR__ . '/../..' . '/neptunia/Application.php',
        'Neptunia\\Config\\Database\\Queries\\Query' => __DIR__ . '/../..' . '/neptunia/Config/Database/Queries/Query.php',
        'Neptunia\\Config\\Database\\UserDatabase' => __DIR__ . '/../..' . '/neptunia/Config/Database/UserDatabase.php',
        'Neptunia\\Config\\Routes\\web' => __DIR__ . '/../..' . '/neptunia/Config/Routes/web.php',
        'Neptunia\\Config\\UserConfig' => __DIR__ . '/../..' . '/neptunia/Config/UserConfig.php',
        'Neptunia\\Http\\Controllers\\Controller' => __DIR__ . '/../..' . '/neptunia/Http/Controllers/Controller.php',
        'Neptunia\\Request' => __DIR__ . '/../..' . '/neptunia/Request.php',
        'Neptunia\\Response' => __DIR__ . '/../..' . '/neptunia/Response.php',
        'Neptunia\\Router' => __DIR__ . '/../..' . '/neptunia/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5827e3cf0e83eb74cd5dac668cfeea52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5827e3cf0e83eb74cd5dac668cfeea52::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5827e3cf0e83eb74cd5dac668cfeea52::$classMap;

        }, null, ClassLoader::class);
    }
}