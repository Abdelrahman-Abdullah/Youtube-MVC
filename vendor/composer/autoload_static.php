<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90f120fbfbc358039673130896bff2fd
{
    public static $classMap = array (
        'ComposerAutoloaderInit90f120fbfbc358039673130896bff2fd' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit90f120fbfbc358039673130896bff2fd' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\QueryBuilders\\QueryBuilder' => __DIR__ . '/../..' . '/app/QueryBuilders/QueryBuilder.php',
        'app\\controllers\\HomePageController' => __DIR__ . '/../..' . '/app/controllers/HomePageController.php',
        'app\\controllers\\UserController' => __DIR__ . '/../..' . '/app/controllers/UserController.php',
        'app\\controllers\\controller' => __DIR__ . '/../..' . '/app/controllers/controller.php',
        'app\\models\\HomePage' => __DIR__ . '/../..' . '/app/models/HomePage.php',
        'app\\models\\Product' => __DIR__ . '/../..' . '/app/models/Product.php',
        'app\\models\\model' => __DIR__ . '/../..' . '/app/models/model.php',
        'core\\Database' => __DIR__ . '/../..' . '/core/Database.php',
        'core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'core\\Route' => __DIR__ . '/../..' . '/core/Route.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit90f120fbfbc358039673130896bff2fd::$classMap;

        }, null, ClassLoader::class);
    }
}
