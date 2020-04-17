<?php

declare(strict_types=1);

namespace app\core;

class App
{
    private static $config = null;

    public static function start(): void
    {
        if (static::$config === null) {
            static::$config = include(ROOT . 'app/config/config.php');
            Route::start();
        }
    }

    public static function getConfig(string $key)
    {
        return (!empty(static::$config[$key])) ? static::$config[$key] : false;
    }
}