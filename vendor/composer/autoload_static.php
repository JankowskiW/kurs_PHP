<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95b88b6aa1589872706441950371b320
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInit95b88b6aa1589872706441950371b320' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit95b88b6aa1589872706441950371b320' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Post' => __DIR__ . '/../..' . '/core/Post.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Task' => __DIR__ . '/../..' . '/core/database/Task.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit95b88b6aa1589872706441950371b320::$classMap;

        }, null, ClassLoader::class);
    }
}
