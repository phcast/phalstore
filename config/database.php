<?php

return [
    'default' => env('DB_ADAPTER', 'mysql'),

    'drivers' => [

        'mysql' => [
            'adapter'  => 'Mysql',
            'host'     => env('DB_HOST', '127.0.0.1'),
            'dbname'   => env('DB_DATABASE', ''),
            'port'     => env('DB_PORT', 3306),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', 'secret'),
            'charset'  => env('DB_CHARSET', 'utf8'),
        ],

        'sqlite' => [
            'adapter'  => 'Sqlite',
            'dbname'   => env('DB_DATABASE', app_path('database.sqlite')),
        ],

        'postgresql' => [
            'adapter'  => 'Postgresql',
            'host'     => env('DB_HOST', '127.0.0.1'),
            'dbname'   => env('DB_DATABASE', ''),
            'port'     => env('DB_PORT', 5432),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', 'secret'),
            'schema'   => env('DB_SCHEMA', 'public'),
        ],
    ],
];
