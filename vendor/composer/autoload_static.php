<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadd009dab3c45645b722bf411b14cc1c
{
    public static $files = array (
        '34901568a1e26d13dd475cb2c85e0284' => __DIR__ . '/..' . '/zendframework/zend-form/autoload/formElementManagerPolyfill.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\View\\' => 10,
            'Zend\\Validator\\' => 15,
            'Zend\\Uri\\' => 9,
            'Zend\\Stdlib\\' => 12,
            'Zend\\ServiceManager\\' => 20,
            'Zend\\Router\\' => 12,
            'Zend\\Paginator\\' => 15,
            'Zend\\Mvc\\' => 9,
            'Zend\\ModuleManager\\' => 19,
            'Zend\\Loader\\' => 12,
            'Zend\\InputFilter\\' => 17,
            'Zend\\I18n\\' => 10,
            'Zend\\Hydrator\\' => 14,
            'Zend\\Http\\' => 10,
            'Zend\\Form\\' => 10,
            'Zend\\Filter\\' => 12,
            'Zend\\EventManager\\' => 18,
            'Zend\\Escaper\\' => 13,
            'Zend\\Db\\' => 8,
            'Zend\\Config\\' => 12,
            'Zend\\ComponentInstaller\\' => 24,
            'Zend\\Code\\' => 10,
            'ZF\\DevelopmentMode\\' => 19,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'A' => 
        array (
            'Application\\' => 12,
            'ApplicationTest\\' => 16,
            'Album\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\View\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-view/src',
        ),
        'Zend\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-validator/src',
        ),
        'Zend\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-uri/src',
        ),
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Zend\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-router/src',
        ),
        'Zend\\Paginator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-paginator/src',
        ),
        'Zend\\Mvc\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-mvc/src',
        ),
        'Zend\\ModuleManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-modulemanager/src',
        ),
        'Zend\\Loader\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-loader/src',
        ),
        'Zend\\InputFilter\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-inputfilter/src',
        ),
        'Zend\\I18n\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-i18n/src',
        ),
        'Zend\\Hydrator\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-hydrator/src',
        ),
        'Zend\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-http/src',
        ),
        'Zend\\Form\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-form/src',
        ),
        'Zend\\Filter\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-filter/src',
        ),
        'Zend\\EventManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-eventmanager/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'Zend\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-db/src',
        ),
        'Zend\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-config/src',
        ),
        'Zend\\ComponentInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-component-installer/src',
        ),
        'Zend\\Code\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-code/src',
        ),
        'ZF\\DevelopmentMode\\' => 
        array (
            0 => __DIR__ . '/..' . '/zfcampus/zf-development-mode/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/Application/src',
        ),
        'ApplicationTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/Application/test',
        ),
        'Album\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module/Album/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitadd009dab3c45645b722bf411b14cc1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadd009dab3c45645b722bf411b14cc1c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
