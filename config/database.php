<?php
return [
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'write' => [
                'host' => env('DB_WRITE_HOST'),
            ],
            'read' => [
                'host' => env('DB_READ_HOST'),
            ],
            'sticky' => true,
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => 'bbs_',
            'prefix_indexes' => true,
            'strict' => false,
            'engine' => null,
        ],
    ],
];
