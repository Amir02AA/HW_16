<?php

namespace models\Database;

use Dotenv\Dotenv;

class ENVmanager
{
    private static string $dir = '../../';
    private static array $envs = [];

    public static function setDir(string $dir)
    {
        self::$dir = $dir;
    }

    private static function load()
    {
        self::$envs = Dotenv::createImmutable(self::$dir)->load();
    }

    public static function getSQLconfig()
    {
        $config = [
            'dsn' => self::$envs['DB_DSN'],
            'user' => self::$envs['DB_USER'],
            'password' => self::$envs['DB_PASSWORD']
        ];

        return $config;
    }
}