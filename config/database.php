<?php

use Illuminate\Support\Str;

return [

    'default' => env('DB_CONNECTION', 'abrilamoblamientossrv'),

    'connections' => [

        'abrilamoblamientossrv' => [
    'driver' => 'sqlsrv',
    'host' => env('DB_HOST_SQLSERVER', '190.231.99.215'),
    'port' => env('DB_PORT_SQLSERVER', '1435'),
    'database' => env('DB_DATABASE_SQLSERVER', 'AbrilSRL'),
    'username' => env('DB_USERNAME_SQLSERVER', 'worky'),
    'password' => env('DB_PASSWORD_SQLSERVER', 'retail109'),
    'charset' => 'utf8',
    'prefix' => '',
    'prefix_indexes' => true,
    'options' => [
        'TrustServerCertificate' => true, // Agrega esta opción si hay problemas de certificado
    ],
],

        // Otras conexiones...

    ],

    'migrations' => 'migrations',

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];
