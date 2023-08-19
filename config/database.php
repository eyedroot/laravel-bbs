<?php
return [
    'connections' => [
        'bbs_source' => [
            'driver' => 'mysql',
            'host' => env('BBS_DB_HOST', '127.0.0.1'),
            'port' => env('BBS_DB_PORT', '3306'),
            'database' => env('BBS_DB_DATABASE', 'forge'),
            'username' => env('BBS_DB_USERNAME', 'forge'),
            'password' => env('BBS_DB_PASSWORD', ''),
        ],
        'bbs_replica' => [
            'driver' => 'mysql',
            'host' => env('BBS_DB_HOST', '127.0.0.1'),
            'port' => env('BBS_DB_PORT', '3306'),
            'database' => env('BBS_DB_DATABASE', 'forge'),
            'username' => env('BBS_DB_USERNAME', 'forge'),
            'password' => env('BBS_DB_PASSWORD', ''),
        ],
    ],
];
